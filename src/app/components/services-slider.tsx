import React, { useCallback } from 'react';
import { motion } from 'motion/react';
import useEmblaCarousel from 'embla-carousel-react';
import { ChevronLeft, ChevronRight, Eye, Droplet, Dumbbell, Wifi, Clock, Users, Coffee, Gamepad2, Mic, Presentation } from 'lucide-react';

const services = [
  {
    id: 'observation-deck',
    icon: Eye,
    title: 'Обзорная площадка',
    author: 'Библиотека',
    image: 'https://images.unsplash.com/photo-1542725752-e9f7259b3881?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxib29rcyUyMHJlYWRpbmclMjBlZHVjYXRpb258ZW58MXx8fHwxNzc1MDU2MzY1fDA&ixlib=rb-4.1.0&q=80&w=1080',
    category: 'Отдых',
  },
  {
    id: 'sauna',
    icon: Droplet,
    title: 'Сауна',
    author: 'Библиотека',
    image: 'https://images.unsplash.com/photo-1680534240478-08c865dc608f?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxwZW9wbGUlMjBzdHVkeWluZyUyMGxpYnJhcnl8ZW58MXx8fHwxNzc1MDU2MzY2fDA&ixlib=rb-4.1.0&q=80&w=1080',
    category: 'Релакс',
  },
  {
    id: 'cafe',
    icon: Coffee,
    title: 'Кафе',
    author: 'Библиотека',
    image: 'https://images.unsplash.com/photo-1554118811-1e0d58224f24?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxjYWZlJTIwaW50ZXJpb3J8ZW58MXx8fHwxNjc0MDA1MDIyfDA&ixlib=rb-1.2.1&q=80&w=1080',
    category: 'Отдых',
  },
  {
    id: 'lecture-hall',
    icon: Presentation,
    title: 'Лекторий',
    author: 'Библиотека',
    image: 'https://images.unsplash.com/photo-1540575467063-178a50c2df87?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=Mnw3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxsZWN0dXJlJTIwaGFsbHxlbnwxfHx8fDE2NzQwMDUxNTE&ixlib=rb-1.2.1&q=80&w=1080',
    category: 'События',
  },
  {
    id: 'concert-hall',
    icon: Mic,
    title: 'Концертный зал',
    author: 'Библиотека',
    image: 'https://images.unsplash.com/photo-1514525253161-7a46d19cd819?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=Mnw3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxjb25jZXJ0JTIwaGFsbHxlbnwxfHx8fDE2NzQwMDUyMjk&ixlib-rb-1.2.1&q=80&w=1080',
    category: 'Музыка',
  },
  {
    id: 'kids-zone',
    icon: Gamepad2,
    title: 'Детская комната',
    author: 'Библиотека',
    image: 'https://images.unsplash.com/photo-1556388250-b4c74c57376c?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxraWRzJTIwY2x1YnxlbnwxfHx8fDE2NzQwMDUyOTV8MA&ixlib-rb-1.2.1&q=80&w=1080',
    category: 'Семья',
  },
  {
    id: 'gym',
    icon: Dumbbell,
    title: 'Спортзал',
    author: 'Библиотека',
    image: 'https://images.unsplash.com/photo-1728450136822-f0a58df17825?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxkaWdpdGFsJTIwbGlicmFyeSUyMHRlY2hub2xvZ3l8ZW58MXx8fHwxNzc1MDMxMzA0fDA&ixlib=rb-4.1.0&q=80&w=1080',
    category: 'Спорт',
  },
  {
    id: 'coworking',
    icon: Wifi,
    title: 'Коворкинг',
    author: 'Библиотека',
    image: 'https://images.unsplash.com/photo-1773352517110-ec61a8ade9f7?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxib29rJTIwY29sbGVjdGlvbiUyMHNoZWx2ZXN8ZW58MXx8fHwxNzc1MDU2MzY2fDA&ixlib=rb-4.1.0&q=80&w=1080',
    category: 'Работа',
  },
];

const ServicesSlider: React.FC = () => {
  const [emblaRef, emblaApi] = useEmblaCarousel({ loop: true, align: 'start' });

  const scrollPrev = useCallback(() => {
    if (emblaApi) emblaApi.scrollPrev();
  }, [emblaApi]);

  const scrollNext = useCallback(() => {
    if (emblaApi) emblaApi.scrollNext();
  }, [emblaApi]);

  return (
    <section className="py-24 bg-white">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <motion.div
          initial={{ opacity: 0, y: 20 }}
          whileInView={{ opacity: 1, y: 0 }}
          viewport={{ once: true }}
          transition={{ duration: 0.6 }}
          className="text-center"
        >
          <span className="inline-block px-4 py-2 bg-red-50 text-red-600 rounded-full text-sm mb-4 shadow-sm">
            Наши услуги
          </span>
          <h2 className="text-4xl sm:text-5xl font-bold text-gray-900 mb-6">
            Комфорт и технологии для вашего обучения
          </h2>
          <p className="text-xl text-gray-600 mb-10 leading-relaxed max-w-3xl mx-auto">
            Мы создали современное пространство, где каждый найдёт идеальные условия для работы, учёбы и творчества
          </p>
        </motion.div>

        <div className="relative">
          <div className="overflow-hidden" ref={emblaRef}>
            <div className="flex">
              {services.map((service, index) => (
                <div className="flex-shrink-0 w-full sm:w-1/2 md:w-1/3 lg:w-1/4 p-4" key={index}>
                  <div className="relative rounded-lg overflow-hidden shadow-lg h-96 group">
                    <img src={service.image} alt={service.title} className="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
                    <div className="absolute inset-0 bg-black bg-opacity-50 transition-opacity duration-300 group-hover:bg-opacity-60"></div>
                    <div className="absolute bottom-0 left-0 p-6 text-white">
                      <span className="inline-block bg-red-500 text-white text-xs font-semibold px-2 py-1 rounded-full mb-2">{service.category}</span>
                      <h3 className="text-xl font-bold mb-1">{service.title}</h3>
                      <p className="text-sm text-gray-300">Автор: {service.author}</p>
                    </div>
                  </div>
                </div>
              ))}
            </div>
          </div>

          <button 
            onClick={scrollPrev} 
            className="absolute top-1/2 left-0 transform -translate-y-1/2 bg-white/80 hover:bg-white rounded-full p-2 shadow-md z-10 ml-2"
          >
            <ChevronLeft className="h-6 w-6 text-gray-800" />
          </button>
          <button 
            onClick={scrollNext} 
            className="absolute top-1/2 right-0 transform -translate-y-1/2 bg-white/80 hover:bg-white rounded-full p-2 shadow-md z-10 mr-2"
          >
            <ChevronRight className="h-6 w-6 text-gray-800" />
          </button>
        </div>
      </div>
    </section>
  );
};

export default ServicesSlider;
