<?php

namespace Database\Seeders;

use App\Models\Words;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WordsSeeder extends Seeder
{
    public function run()
    {
        Words::create([
            'id'=> 1,
            'key'=> 'Заявка',
            'word_uz'=> 'Ilova',
            'word_ru'=> 'Заявка',
            'word_en'=> 'Заявка',
        ]);
        Words::create([
            'id'=> 2,
            'key'=> 'Оставьте свои контактные данные, и наш менеджер расскажет больше интересных деталей',
            'word_uz'=> 'Aloqa ma\'lumotlarini qoldiring va menejerimiz sizga ko\'proq qiziqarli ma\'lumotlarni aytib beradi',
            'word_ru'=> 'Оставьте свои контактные данные, и наш менеджер расскажет больше интересных деталей',
            'word_en'=> 'Оставьте свои контактные данные, и наш менеджер расскажет больше интересных деталей',
        ]);
        Words::create([
            'id'=> 3,
            'key'=> 'Отправить',
            'word_uz'=> 'Yuborish',
            'word_ru'=> 'Отправить',
            'word_en'=> 'Отправить',
        ]);
        Words::create([
            'id'=> 4,
            'key'=> 'Даю согласие на обработку моих персональных данных',
            'word_uz'=> 'Shaxsiy ma\'lumotlarimni qayta ishlashga rozilik beraman',
            'word_ru'=> 'Даю согласие на обработку моих персональных данных',
            'word_en'=> 'Даю согласие на обработку моих персональных данных',
        ]);
        Words::create([
            'id'=> 5,
            'key'=> 'Ваш запрос получен. мы свяжемся с вами в ближайшее время',
            'word_uz'=> 'Sizning so\'rovingiz qabul qilindi. tez orada siz bilan bog\'lanamiz',
            'word_ru'=> 'Ваш запрос получен. мы свяжемся с вами в ближайшее время',
            'word_en'=> 'Ваш запрос получен. мы свяжемся с вами в ближайшее время',
        ]);
        Words::create([
            'id'=> 6,
            'key'=> '71 200 74 00',
            'word_uz'=> '71 200 74 00',
            'word_ru'=> '71 200 74 00',
            'word_en'=> '71 200 74 00',
        ]);
        Words::create([
            'id'=> 7,
            'key'=> 'Zo’rsan - Все для <span>жизни</span> все для <span>счастья</span>',
            'word_uz'=> 'Zo’rsan - barchasi <span> hayot uchun</span> va barchasi baxt uchun ',
            'word_ru'=> 'Zo’rsan - Все для <span>жизни</span> все для <span>счастья</span>',
            'word_en'=> 'Zo’rsan - Все для <span>жизни</span> все для <span>счастья</span>',
        ]);
        Words::create([
            'id'=> 8,
            'key'=> 'Обеспечьте себе благополучную жизнь вместе с нами!',
            'word_uz'=> 'Hayotingizni biz bilan farovon qiling!',
            'word_ru'=> 'Обеспечьте себе благополучную жизнь вместе с нами!',
            'word_en'=> 'Обеспечьте себе благополучную жизнь вместе с нами!',
        ]);
        Words::create([
            'id'=> 9,
            'key'=> '<span>14</span> Блоков',
            'word_uz'=> '<span>14 ta</span> Blok',
            'word_ru'=> '<span>14</span> Блоков',
            'word_en'=> '<span>14</span> Блоков',
        ]);
        Words::create([
            'id'=> 10,
            'key'=> '<span>16</span> Этажные здания',
            'word_uz'=> '<span>16</span> Qavatli binolar',
            'word_ru'=> '<span>16</span> Этажные здания',
            'word_en'=> '<span>16</span> Этажные здания',
        ]);
        Words::create([
            'id'=> 11,
            'key'=> 'Жилой комплекс <span>для</span> комфортной <span>жизни</span>',
            'word_uz'=> 'Baxtli hayot <span>maskaniga</span>  xush <span>kelibsiz!</span>',
            'word_ru'=> 'Жилой комплекс <span>для</span> комфортной <span>жизни</span>',
            'word_en'=> 'Жилой комплекс <span>для</span> комфортной <span>жизни</span>',
        ]);
        Words::create([
            'id'=> 12,
            'key'=> 'Скачать презентацию',
            'word_uz'=> 'Yuklab olish',
            'word_ru'=> 'Скачать презентацию',
            'word_en'=> 'Скачать презентацию',
        ]);
        Words::create([
            'id'=> 13,
            'key'=> 'Преимущества',
            'word_uz'=> 'Afzalliklar',
            'word_ru'=> 'Преимущества',
            'word_en'=> 'Преимущества',
        ]);
        Words::create([
            'id'=> 14,
            'key'=> 'расположение',
            'word_uz'=> 'Manzil',
            'word_ru'=> 'расположение',
            'word_en'=> 'расположение',
        ]);
        Words::create([
            'id'=> 15,
            'key'=> 'Yunsobod tumani Yuqori Qoraqamish 9 uy',
            'word_uz'=> 'Yunsobod tumani Yuqori Qoraqamish 9 uy',
            'word_ru'=> 'Yunsobod tumani Yuqori Qoraqamish 9 uy',
            'word_en'=> 'Yunsobod tumani Yuqori Qoraqamish 9 uy',
        ]);
        Words::create([
            'id'=> 16,
            'key'=> 'Архитектура',
            'word_uz'=> 'Arxitektura',
            'word_ru'=> 'Архитектура',
            'word_en'=> 'Архитектура',
        ]);
        Words::create([
            'id'=> 17,
            'key'=> 'Xonadonlar orasidagi devorlari avtoklavlangan gazobeton bilan bolinadi, qalinligi - 200 mm',
            'word_uz'=> 'Xonadonlar orasidagi devorlari avtoklavlangan gazobeton bilan bolinadi, qalinligi - 200 mm',
            'word_ru'=> 'Стены между квартирами разделены автоклавным газобетоном, толщина - 200 мм',
            'word_en'=> 'Xonadonlar orasidagi devorlari avtoklavlangan gazobeton bilan bolinadi, qalinligi - 200 mm',
        ]);
        Words::create([
            'id'=> 18,
            'key'=> 'Oynalari 2 qavat steklopaket, tashqi oynalar yodiviy Akfa trio',
            'word_uz'=> 'Yuklab olish',
            'word_ru'=> 'Окна 2 этажа стеклопакет',
            'word_en'=> 'Окна 2 этажа стеклопакет',
        ]);
        Words::create([
            'id'=> 19,
            'key'=> 'ARD funksiyasiga ega va 900 kg og\'irlik ko\'tara oladigan liftlari go\'viladi',
            'word_uz'=> '900 kg og\'irlik ko\'tara oladigan liftlar',
            'word_ru'=> 'Подъемники с функцией ARD и грузоподъемностью 900 кг',
            'word_en'=> 'Подъемники с функцией ARD и грузоподъемностью 900 кг',
        ]);
        Words::create([
            'id'=> 20,
            'key'=> 'Получить консультацию',
            'word_uz'=> 'BEPUL MASLAHAT OLISH',
            'word_ru'=> 'Получить консультацию',
            'word_en'=> 'Получить консультацию',
        ]);
        Words::create([
            'id'=> 21,
            'key'=> 'Запишитесь <span>на</span>просмотр <span>Zo’rsan</span>',
            'word_uz'=> 'SAVOLLARINGIZ <span>BORMI BEPUL MASLAHAT</span> OLING',
            'word_ru'=> 'Запишитесь <span>на</span>просмотр <span>Zo’rsan</span>',
            'word_en'=> 'Запишитесь <span>на</span>просмотр <span>Zo’rsan</span>',
        ]);
        Words::create([
            'id'=> 22,
            'key'=> 'Планировки',
            'word_uz'=> 'Mavjud planirovkalar',
            'word_ru'=> 'Планировки',
            'word_en'=> 'Планировки',
        ]);
        Words::create([
            'id'=> 23,
            'key'=> '<span>Максимум</span> полезных метров в <span>планировке</span>',
            'word_uz'=> 'Ko\'rkam xonadonlar, ajoyib planirovkalar va qulay joylashuv',
            'word_ru'=> 'Максимум выгоды в вашей планировке',
            'word_en'=> 'Максимум выгоды в вашей планировке',
        ]);
        Words::create([
            'id'=> 24,
            'key'=> 'Площадь квартиры',
            'word_uz'=> 'Xonadon maydoni',
            'word_ru'=> 'Площадь квартиры',
            'word_en'=> 'Площадь квартиры',
        ]);
        Words::create([
            'id'=> 25,
            'key'=> 'Забронировать',
            'word_uz'=> 'Bron qilish',
            'word_ru'=> 'Забронировать',
            'word_en'=> 'Забронировать',
        ]);
        Words::create([
            'id'=> 26,
            'key'=> 'Галерея',
            'word_uz'=> 'Galereya',
            'word_ru'=> 'Галерея',
            'word_en'=> 'Галерея',
        ]);
        Words::create([
            'id'=> 27,
            'key'=> 'О проекте',
            'word_uz'=> 'Loyiha haqida',
            'word_ru'=> 'О проекте',
            'word_en'=> 'О проекте',
        ]);
        Words::create([
            'id'=> 28,
            'key'=> 'г. Ташкент, Юнусабадский район, ул. Янгишахар, 64А',
            'word_uz'=> 'Toshkent shahri, Yunusobod tumani, 13-mavzey, Axilobod 72-uy',
            'word_ru'=> 'г. Ташкент, Юнусабадский район, ул. Янгишахар, 64А',
            'word_en'=> 'г. Ташкент, Юнусабадский район, ул. Янгишахар, 64А',
        ]);
        Words::create([
            'id'=> 29,
            'key'=> 'Instagram',
            'word_uz'=> 'Instagram',
            'word_ru'=> 'Instagram',
            'word_en'=> 'Instagram',
        ]);
        Words::create([
            'id'=> 30,
            'key'=> 'Facebook',
            'word_uz'=> 'Facebook',
            'word_ru'=> 'Facebook',
            'word_en'=> 'Facebook',
        ]);
        Words::create([
            'id'=> 31,
            'key'=> 'Telegram',
            'word_uz'=> 'Telegram',
            'word_ru'=> 'Telegram',
            'word_en'=> 'Telegram',
        ]);
        Words::create([
            'id'=> 32,
            'key'=> '© XON SAROY',
            'word_uz'=> '© XON SAROY',
            'word_ru'=> '© XON SAROY',
            'word_en'=> '© XON SAROY',
        ]);
        Words::create([
            'id'=> 33,
            'key'=> 'created by NOVAS',
            'word_uz'=> 'created by NOVAS',
            'word_ru'=> 'created by NOVAS',
            'word_en'=> 'created by NOVAS',
        ]);
        Words::create([
            'id'=> 34,
            'key'=> 'PРасположение',
            'word_uz'=> 'Manzil',
            'word_ru'=> 'Расположение',
            'word_en'=> 'Расположение',
        ]);
        Words::create([
            'id'=> 35,
            'key'=> 'Ваше имя',
            'word_uz'=> 'Ismingiz',
            'word_ru'=> 'Ваше имя',
            'word_en'=> 'Ваше имя',
        ]);
        Words::create([
            'id'=> 36,
            'key'=> 'Номер телефона',
            'word_uz'=> 'Telefon raqamingiz',
            'word_ru'=> 'Номер телефона',
            'word_en'=> 'Номер телефона',
        ]);
    }
}
