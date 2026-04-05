import { Header } from '../components/header';
import { Footer } from '../components/footer';
import { MapPin, Building, Coffee, Bike, Park, Cat } from 'lucide-react';

export default function InteractiveMapPage() {
  const keyLocations = [
    {
      name: 'Обзорная площадка',
      description: 'Панорамный вид на город с высоты птичьего полета.',
      icon: <MapPin className="w-8 h-8 text-blue-500" />,
    },
    {
      name: 'Физкультурно-оздоровительный комплекс',
      description: 'Современный комплекс для занятий спортом и поддержания формы.',
      icon: <Building className="w-8 h-8 text-green-500" />,
    },
    {
      name: 'Буфет Национальной библиотеки',
      description: 'Уютное место, где можно перекусить и выпить кофе.',
      icon: <Coffee className="w-8 h-8 text-yellow-500" />,
    },
    {
      name: 'Велопарковка',
      description: 'Охраняемая парковка для вашего велосипеда.',
      icon: <Bike className="w-8 h-8 text-red-500" />,
    },
    {
      name: 'Парк Писателей',
      description: 'Тихий и уютный парк для прогулок и отдыха.',
      icon: <Park className="w-8 h-8 text-purple-500" />,
    },
    {
      name: 'Кот Библик',
      description: 'Популярный арт-объект и талисман библиотеки.',
      icon: <Cat className="w-8 h-8 text-indigo-500" />,
    },
  ];

  return (
    <div className="min-h-screen bg-white">
      <Header />
      <main className="py-12 md:py-24">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <h1 className="text-4xl md:text-5xl font-bold text-gray-900 mb-8 text-center">
            Интерактивная карта
          </h1>
          <p className="text-lg text-gray-700 mb-12 text-center">
            Найдите нужные вам залы и услуги в здании Национальной библиотеки Беларуси.
          </p>
          <div className="w-full h-[600px] rounded-lg overflow-hidden shadow-lg mb-16">
            <iframe
              src="https://yandex.by/maps/org/natsionalnaya_biblioteka_belarusi/1087338903/?ll=27.646090%2C53.931243&z=18"
              width="100%"
              height="100%"
              frameBorder="0"
              allowFullScreen={true}
              style={{position: 'relative'}}
            ></iframe>
          </div>

          <div className="text-center">
            <h2 className="text-3xl font-bold text-gray-900 mb-12">Основные места</h2>
            <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
              {keyLocations.map((location, index) => (
                <div key={index} className="bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                  <div className="flex items-center justify-center mb-4">{location.icon}</div>
                  <h3 className="text-xl font-semibold text-gray-800 mb-2">{location.name}</h3>
                  <p className="text-gray-600">{location.description}</p>
                </div>
              ))}
            </div>
          </div>
        </div>
      </main>
      <Footer />
    </div>
  );
}
