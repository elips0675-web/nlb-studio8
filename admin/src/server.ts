import express from 'express';
import payload from 'payload';

const app = express();

// Initialize Payload
async function start() {
  await payload.initAsync({
    secret: process.env.PAYLOAD_SECRET,
    express: app,
    onInit: async () => {
      payload.logger.info(`Payload Admin URL: ${payload.getAdminURL()}`);
    },
  });

  app.listen(3000, async () => {
    payload.logger.info('Payload server is running on port 3000');
  });
}

start();
