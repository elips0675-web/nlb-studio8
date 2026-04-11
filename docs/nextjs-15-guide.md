# Next.js 15 (App Router), TypeScript, Tailwind CSS, ShadCN UI, Framer Motion

Это отличный современный стек! Он позволяет создавать невероятно быстрые, типизированные и при этом очень красивые интерфейсы. В Next.js 15 основное внимание уделено стабильности App Router, поддержке React 19 и улучшению кэширования.

Вот краткий гайд по развертыванию и философии этого стека:

## 1. Быстрый старт

Самый простой способ поднять проект — использовать CLI Next.js, а затем добавить ShadCN:

```bash
# Создаем проект Next.js
npx create-next-app@latest my-app --typescript --tailwind --eslint

# Переходим в папку
cd my-app

# Инициализируем ShadCN UI
npx shadcn-ui@latest init
```

## 2. Особенности стека

*   **Next.js 15 (App Router):** Используйте Server Components по умолчанию для загрузки данных (fetch) и Client Components ('use client') только там, где нужна интерактивность или Framer Motion.
*   **TypeScript:** В Next.js 15 улучшена типизация метаданных и параметров маршрутов (params теперь являются Promise в некоторых контекстах).
*   **ShadCN UI:** Это не библиотека компонентов в привычном виде, а набор кода, который вы копируете к себе. Это дает полный контроль над стилями через Tailwind.
*   **Framer Motion:** Идеален для анимации переходов между страницами и появления элементов. Помните, что он работает только в 'use client' компонентах.

## 3. Пример: Анимированная кнопка ShadCN + Framer Motion

После установки кнопки (`npx shadcn-ui@latest add button`), вы можете обернуть её в `motion`:

```tsx
"use client";

import { motion } from "framer-motion";
import { Button } from "@/components/ui/button";

export default function AnimatedButton() {
  return (
    <motion.div
      whileHover={{ scale: 1.05 }}
      whileTap={{ scale: 0.95 }}
    >
      <Button variant="default">Нажми меня</Button>
    </motion.div>
  );
}
```

## Почему этот стек сейчас лучший?

*   **Производительность:** Next.js 15 оптимизирует доставку JS, а Tailwind минимизирует CSS.
*   **UX/UI:** ShadCN дает профессиональный вид "из коробки", а Framer Motion добавляет интерфейсу "жизни".
*   **DX (Опыт разработчика):** Строгая типизация и готовые примитивы позволяют собирать фичи очень быстро.
