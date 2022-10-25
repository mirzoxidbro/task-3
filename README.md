Laravelda fikr-mulohaza shaklini amalga oshirishingiz kerak: <br>
-ro'yxatga olish/avtorizatsiya: standart autentifikatsiya moduli (lekin foydalanuvchilar
ikkita rolga ega bo'lishi kerak: menejer va mijoz. <br>
Mijozlar o'zlarini ro'yxatdan o'tkazishadi va menejer hisobi bo'lishi kerak oldindan yarating, login va parolni tugallangan vazifa bilan birga yuboring) <br>
-kirishdan so'ng mijoz fikr-mulohaza shaklini, menejer esa ro'yxatni ko'radi ilovalar. (barcha sahifalar va funksiyalar faqat avtorizatsiya qilinganlar uchun mavjud foydalanuvchilar va faqat ularning imtiyozlariga ko'ra)
- menejer ilovalar ro'yxatini ko'rishi va ularni belgilashi mumkin javob berdi. - ilovalar ro'yxati:
*ID, mavzu, xabar, mijoz nomi, mijoz elektron pochtasi, biriktirilgan faylga havola, yaratish vaqti
- mijoz so'rov qoldirishi mumkin, lekin kuniga bir martadan ko'p emas.
- ilovani yaratish sahifasida: mavzu va xabar, faylni kiritish, "yuborish" tugmasi.
- shaklni qayta ishlash va ariza yaratish vaqtida uni menejerga yuboring barcha ma'lumotlar bilan elektron pochta
- pochtani asinxron yuborish (navbatlar yordamida), qilish kamida qisman sinov qamrovi.

Tartibga e'tibor berilmaydi, kodning dizayni muhim,
phpdoc, php7+ xususiyatlari va ramka xususiyatlaridan foydalangan holda.

Biz sizdan omborga havolani (har bir yangi funktsiya alohida amalga oshirilishi maqsadga muvofiq) va loyihani joylashtirish bo'yicha ko'rsatmalar bilan birga keladigan xabarni kutamiz.



Mavzular: <br>
Auth - authentication <br>
Role 2: mijoz, menejer <br>
Authorization - permissions <br>
CRUD <br>
Form, file upload <br>
Email <br>
Queue, Job <br>
