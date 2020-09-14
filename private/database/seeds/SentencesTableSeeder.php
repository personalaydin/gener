<?php

use Illuminate\Database\Seeder;
use App\Models\Entities\Sentence;

class SentencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Delete All Sentences
        $sentences = Sentence::all();
        foreach ($sentences as $row) {
            $row->forceDelete();
        }

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Sentence::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

        // Set new sentences
        $sentences = [
            [
                'name' => 'stationary-text',
                'tr' => [
                    'content' => 'SABİT',
                ],
                'en' => [
                    'content' => 'STATIONARY',
                ],
            ],
            [
                'name' => 'models-text',
                'tr' => [
                    'content' => 'MODELLER',
                ],
                'en' => [
                    'content' => 'MODELS',
                ],
            ],
            [
                'name' => 'portable-models-text',
                'tr' => [
                    'content' => 'MAKİNELERİ',
                ],
                'en' => [
                    'content' => 'MACHINES',
                ],
            ],
            [
                'name' => 'stationary-slug',
                'tr' => [
                    'content' => 'sabit',
                ],
                'en' => [
                    'content' => 'stationary',
                ],
            ],

            [
                'name' => 'portable-mobil-text',
                'tr' => [
                    'content' => 'MOBİL',
                ],
                'en' => [
                    'content' => 'PORTABLE',
                ],
            ],
            [
                'name' => 'portable-text',
                'tr' => [
                    'content' => 'MOBİL',
                ],
                'en' => [
                    'content' => 'PORTABLE',
                ],
            ],
            [
                'name' => 'portable-text-inside',
                'tr' => [
                    'content' => 'RÜZGAR',
                ],
                'en' => [
                    'content' => 'WIND',
                ],
            ],
            [
                'name' => 'laydown-text',
                'tr' => [
                    'content' => 'YATIK',
                ],
                'en' => [
                    'content' => 'LAY-DOWN',
                ],
            ],
            [
                'name' => 'portable-slug',
                'tr' => [
                    'content' => 'mobil',
                ],
                'en' => [
                    'content' => 'portable',
                ],
            ],
            [
                'name' => 'mega-menu-windmachines-text',
                'tr' => [
                    'content' => 'MAKİNELER',
                ],
                'en' => [
                    'content' => 'MACHINE',
                ],
            ],


            
            [
                'name' => 'windmachines-text',
                'tr' => [
                    'content' => 'MAKİNELERİ',
                ],
                'en' => [
                    'content' => 'MACHINES',
                ],
            ],
            [
                'name' => 'name',
                'tr' => [
                    'content' => 'AD',
                ],
                'en' => [
                    'content' => 'NAME',
                ],
            ],
            [
                'name' => 'contact-page',
                'tr' => [
                    'content' => 'İLETİŞİM',
                ],
                'en' => [
                    'content' => 'CONTACT',
                ],
            ],
            [
                'name' => 'surname',
                'tr' => [
                    'content' => 'SOYAD',
                ],
                'en' => [
                    'content' => 'SURNAME',
                ],
            ],
            [
                'name' => 'email',
                'tr' => [
                    'content' => 'E-POSTA',
                ],
                'en' => [
                    'content' => 'E-MAIL',
                ],
            ],
            [
                'name' => 'subject',
                'tr' => [
                    'content' => 'KONU',
                ],
                'en' => [
                    'content' => 'SUBJECT',
                ],
            ],
            [
                'name' => 'message',
                'tr' => [
                    'content' => 'MESAJ',
                ],
                'en' => [
                    'content' => 'MESSSAGE',
                ],
            ],
            [
                'name' => 'information-text',
                'tr' => [
                    'content' => '<a href=":link:"><strong>Bilgilendirme metni</strong></a>\'ni okudum kabul ediyorum.',
                ],
                'en' => [
                    'content' => 'I have read and agree to the terms in the <a href=":link:"><strong>information text.</strong></a>',
                ],
            ],
            [
                'name' => 'send',
                'tr' => [
                    'content' => 'GÖNDER',
                ],
                'en' => [
                    'content' => 'SEND',
                ],
            ],

            [
                'name' => 'home-1',
                'tr' => [
                    'content' => 'ÇİFT KANAT',
                ],
                'en' => [
                    'content' => 'DOUBLE WING',
                ],
            ],
            [
                'name' => 'home-2',
                'tr' => [
                    'content' => 'KARBON PERVANE',
                ],
                'en' => [
                    'content' => ' CARBON PROPELLER',
                ],
            ],
            [
                'name' => 'home-3',
                'tr' => [
                    'content' => 'Yüksek verimli tasarım',
                ],
                'en' => [
                    'content' => 'High efficiency design',
                ],
            ],
            [
                'name' => 'home-4',
                'tr' => [
                    'content' => 'Dengeli',
                ],
                'en' => [
                    'content' => 'Accuratly balanced',
                ],
            ],
            [
                'name' => 'home-5',
                'tr' => [
                    'content' => 'Sertlik, direnç, beklenen gerçek zamanlı çalışmada mükemmeldir',
                ],
                'en' => [
                    'content' => 'Great in stiffness, resistance and expected life-time',
                ],
            ],

            [
                'name' => 'home-6',
                'tr' => [
                    'content' => 'KULE',
                ],
                'en' => [
                    'content' => 'TOWER',
                ],
            ],


            [
                'name' => 'home-7',
                'tr' => [
                    'content' => 'Modele göre 6 veya 8mm kalınlık',
                ],
                'en' => [
                    'content' => '6 to 8mm depending on model',
                ],
            ],

            [
                'name' => 'home-8',
                'tr' => [
                    'content' => '51mm çap',
                ],
                'en' => [
                    'content' => '51cm in diameter',
                ],
            ],
            [
                'name' => 'home-9',
                'tr' => [
                    'content' => 'Entegre güvenlik ekipmanları',
                ],
                'en' => [
                    'content' => 'Integrated safety equipment',
                ],
            ],
            [
                'name' => 'home-10',
                'tr' => [
                    'content' => 'GÜÇLÜ',
                ],
                'en' => [
                    'content' => 'STRONG',
                ],
            ],
            [
                'name' => 'home-11',
                'tr' => [
                    'content' => 'VOLVO PENTA <br>MOTOR',
                ],
                'en' => [
                    'content' => 'VOLVO PENTA <br> ENGINE',
                ],
            ],
            [
                'name' => 'home-12',
                'tr' => [
                    'content' => 'Dünya standartarnda yakıt tüketimi',
                ],
                'en' => [
                    'content' => 'World-class fuel consumption',
                ],
            ],
            [
                'name' => 'home-13',
                'tr' => [
                    'content' => 'Düşük dB seviyesi',
                ],
                'en' => [
                    'content' => 'Low level of dB',
                ],
            ],
            [
                'name' => 'home-14',
                'tr' => [
                    'content' => 'Düşük devirde maksimum güç ve tork üretimi',
                ],
                'en' => [
                    'content' => 'Maximum power and torque generation at low revolution',
                ],
            ],
            [
                'name' => 'home-15',
                'tr' => [
                    'content' => 'KOMPAKT',
                ],
                'en' => [
                    'content' => 'COMPACT',
                ],
            ],
            [
                'name' => 'home-16',
                'tr' => [
                    'content' => 'KABİN',
                ],
                'en' => [
                    'content' => 'CABIN',
                ],
            ],
            [
                'name' => 'home-17',
                'tr' => [
                    'content' => 'Kolay taşıma için özel tasarım',
                ],
                'en' => [
                    'content' => 'Specific design for easy handling',
                ],
            ],
            [
                'name' => 'home-18',
                'tr' => [
                    'content' => 'Hava koşullarına dayanıklı',
                ],
                'en' => [
                    'content' => 'Weather resistant',
                ],
            ],
            [
                'name' => 'home-19',
                'tr' => [
                    'content' => 'Entegre yakıt deposu',
                ],
                'en' => [
                    'content' => 'Integrated fuel tank',
                ],
            ],
            [
                'name' => 'home-20',
                'tr' => [
                    'content' => 'AKILLI',
                ],
                'en' => [
                    'content' => 'SMART',
                ],
            ],
            [
                'name' => 'home-21',
                'tr' => [
                    'content' => 'DCU',
                ],
                'en' => [
                    'content' => 'DCU',
                ],
            ],
            [
                'name' => 'home-22',
                'tr' => [
                    'content' => 'Otomatik kontrol',
                ],
                'en' => [
                    'content' => 'Auto control',
                ],
            ],
            [
                'name' => 'home-23',
                'tr' => [
                    'content' => 'Kullanıcı dostu',
                ],
                'en' => [
                    'content' => 'User friendly',
                ],
            ],
            [
                'name' => 'home-24',
                'tr' => [
                    'content' => 'Uzaktan kontrol opsiyonu',
                ],
                'en' => [
                    'content' => 'Optional remote control',
                ],
            ],

            [
                'name' => 'home-25',
                'tr' => [
                    'content' => 'MÜŞTERİ DESTEK HİZMETLERİ',
                ],
                'en' => [
                    'content' => 'SUPPORT SERVICES',
                ],
            ],
            [
                'name' => 'home-26',
                'tr' => [
                    'content' => 'Gener, tarımsal donmaya karşı koruma araçları, eğitimli personeli, 4 araçtan oluşan servis filosu ve eksiksiz yedek parça stokları ile sorunsuz hizmet sağlayacaktır.',
                ],
                'en' => [
                    'content' => 'GENER Frost Guard V1 Agricultural frost protection vans will serve to ensure smooth service for trained personnel, service fleet consisting of 4 vehicles and fully stocked spare parts stocks.',
                ],
            ],

            [
                'name' => 'home-27',
                'tr' => [
                    'content' => 'Volvo penta motorları 2 yıl volvo garantilidr ve motor bakımı Volvo servisinde yapılacaktır.',
                ],
                'en' => [
                    'content' => 'Volvo Penta engines are Volvo\'s guarantee for 2 years and engine maintenance will be done at Volvo service.',
                ],
            ],
            [
                'name' => 'home-28',
                'tr' => [
                    'content' => 'Olası tarımsal donma günlerine 24 saat ulaşılabilir ve pervanenin kurulduğu noktada anında servis edilecektir.',
                ],
                'en' => [
                    'content' => 'Possible days of agricultural frost can be reached 24 hours and will be serviced instantly at the point where the propeller is installed.',
                ],
            ],
            [
                'name' => 'head-windmachines',
                'tr' => [
                    'content' => 'Rüzgar Makineleri',
                ],
                'en' => [
                    'content' => 'Wind Machines',
                ],
            ],
            [
                'name' => 'head-infotext',
                'tr' => [
                    'content' => 'Bilgilendirme Metni',
                ],
                'en' => [
                    'content' => 'Information Text',
                ],
            ],
            [
                'name' => 'home-slider-1',
                'tr' => [
                    'content' => '',
                ],
                'en' => [
                    'content' => '',
                ],
            ],
            [
                'name' => 'home-slider-2',
                'tr' => [
                    'content' => 'BAHÇENİZİ ',
                ],
                'en' => [
                    'content' => 'PROTECT YOUR CROPS',
                ],
            ],
            [
                'name' => 'home-slider-3',
                'tr' => [
                    'content' => 'GENER DON PERVANELERİ <br> İLE KORUYUN',
                ],
                'en' => [
                    'content' => 'WITH GENER WIND MACHINES',
                ],
            ],
            [
                'name' => 'home-slider-4',
                'tr' => [
                    'content' => '',
                ],
                'en' => [
                    'content' => '',
                ],
            ],
            
            [
                'name' => 'home-slider-5',
                'tr' => [
                    'content' => 'İNCELE',
                ],
                'en' => [
                    'content' => 'EXPLORE',
                ],
            ],
            [
                'name' => 'home-slider-back',
                'tr' => [
                    'content' => 'GERİ',
                ],
                'en' => [
                    'content' => 'BACK',
                ],
            ],
            [
                'name' => 'home-slider-next',
                'tr' => [
                    'content' => 'SONRAKİ',
                ],
                'en' => [
                    'content' => 'NEXT',
                ],
            ],
            [
                'name' => 'solution-1',
                'tr' => [
                    'content' => 'ZİRAİ DON NEDİR?',
                ],
                'en' => [
                    'content' => 'ABOUT FROST',
                ],
            ],
            [
                'name' => 'solution-2',
                'tr' => [
                    'content' => 'Don, büyük bir abiyotik stres ve dünya çapında tarımsal üretimi sınırlayan faktörlerden biridir. Gener rüzgar makineleri, kule, kabine entegre motor, yakıt deposu, kontrol paneli ve kule üzerindeki bir pervaneden oluşur. Rüzgar makineleri, sıcak havayı bahçenin içine çekmek ya da tarım alanında sıcaklığı arttırmak ve mahsülleri korumak için doğayla uyumlu bir şekilde çalışır',
                ],
                'en' => [
                    'content' => 'Frost is a major abiotic stress and one of the principals limiting factors for agricultural production worldwide. Wind machines work in harmony with nature to absorb hot air into the garden or to increase the temperature and protect crops in the agricultural field.',
                ],
            ],

            [
                'name' => 'solution-3',
                'tr' => [
                    'content' => 'Bitkileri etkileyebilecek iki tür don vardır, adveksiyon ve radyant. Hava değişmesinden önce, mevcut olan daha sıcak havanın yerini almak için, soğuk hava bir bölgeye estiğinde adveksiyon donları meydana gelir. Bu donların diğer etkenleri bulutlu koşullar, orta ila kuvvetli rüzgarlar, sıcaklık dönüşümü ve düşük nemdir. ',
                ],
                'en' => [
                    'content' => 'There are two types of frost that can affect crops, advection and radiant. Advection frosts occur when cold air blows into an area to replace warmer air that was present before the weather change. It is associated with cloudy conditions, moderate to strong winds, no temperature inversion and low humidity. ',
                ],
            ],

            [
                'name' => 'solution-4',
                'tr' => [
                    'content' => 'Radyant don olayları, bitkiler ve toprak gün boyunca güneş ışığını absorbe ettikten sonra, bu sıcaklık gece boyunca soğuk havanın etkisiyle yayıldığı ve ısındığı zaman meydana gelir. Yoğun soğutulmuş hava, en ciddi donma hasarının meydana geldiği bölgenin en alçak alanlarına yerleşir. Gece boyunca yukarıya yükselen daha sıcak hava, genellikle inversiyon tabakası olarak bilinen ekinlerin üzerindeki bir tabakaya hapsolur.',
                ],
                'en' => [
                    'content' => 'Radiant frost events occur when plants and soil absorb the sunlight during the daytime then radiate and rise the heat during the night when cooler air moves in. Dense chilled air settles into the lowest areas of the canopy, where the most serious frost damage happens. The warmer air that rose above during the night is often trapped in a layer above the crops which is known as an inversion layer.',
                ],
            ],

            [
                'name' => 'solution-5',
                'tr' => [
                    'content' => 'Gener rüzgar makineleri; inversiyon tabakasında hapsolmuş sıcak havayı çekmek suretiyle bahçe yüzeyindeki soğuk hava ile karıştırıp sıcaklığı arttırarak mahsulleri korur.',
                ],
                'en' => [
                    'content' => 'GENER wind machines perform heat transfer with forced convection as they pull the warmer air trapped down into the orchard and mix it with the cooler air down on the surface to raise temperatures and save crops. ',
                ],
            ],

            [
                'name' => 'solution-6',
                'tr' => [
                    'content' => 'Böylece, hava kütlesi belirli bir mesafeye iletilir. Dikey eksende de dönebilen GENER Rüzgar Makineleri 360 derecelik bir alanı taramak ve rüzgar hareketini sağlamak için havayı dolaştırır. Gener rüzgar makineleri, kule, kabine entegre motor, yakıt deposu, kontrol paneli ve kule üzerindeki bir pervaneden oluşur. Rüzgar makineleri don ile mücadelede en etkili çözümdür. Daha fazla bilgi edinmek için bize ulaşabilir ve uzmanlarımıza danışabilirsiniz.',
                ],
                'en' => [
                    'content' => 'Thus, transmission of air mass to a specific distance. Due to being able to rotate also in vertical axis, GENER wind machines circulate the air as to scan an area of 360 degrees and enable the wind movement.  Gener Frost Guards consist of a tower, and engine placed in a sealed enclosure, a fuel tank, a control panel and a propeller on the tower. Wind machines have proven to be the most effective solution against frost damages. Contact an expert at GENER to learn more about wind machines.  ',
                ],
            ],
            [
                'name' => 'about-1',
                'tr' => [
                    'content' => 'HAKKIMIZDA',
                ],
                'en' => [
                    'content' => 'ABOUT US',
                ],
            ],
            [
                'name' => 'about-2',
                'tr' => [
                    'content' => 'GENER olarak sizlere; tecrübeli ekibimiz, son teknoloji ürünlerimiz ile inovatif ve sürdürülebilir çözümler sunıyoruz. <br><br> Çözüm odaklı duruşumuz tüm servis, ürün ve iş ilerleyişlerimizde, zamanın ritmiyle hareket ederken güvenilirlik ve kalite önceliğimizdir.',
                ],
                'en' => [
                    'content' => 'We offer innovative and sustainable solutions with our experienced team and state-of-the-art products. <br><br> We keep our solution-oriented stance in all our service, product and business progresses. <br><br> Reliability and quality are always our first priorities while we move with the time and what it brings. ',
                ],
            ],

            [
                'name' => 'about-3',
                'tr' => [
                    'content' => 'Ürün galerimizi inceleyin',
                ],
                'en' => [
                    'content' => 'Check out our products in detail',
                ],
            ],
            [
                'name' => 'about-4',
                'tr' => [
                    'content' => 'DEĞERLERİMİZ',
                ],
                'en' => [
                    'content' => 'OUR VALUES',
                ],
            ],
            [
                'name' => 'stationary-1',
                'tr' => [
                    'content' => 'WIND MACHINES',
                ],
                'en' => [
                    'content' => 'WIND MACHINES',
                ],
            ],
            [
                'name' => 'stationary-2',
                'tr' => [
                    'content' => 'Ürün hakkında daha fazlasını keşfedin.',
                ],
                'en' => [
                    'content' => 'Find out more about Stationary Wind Machines. ',
                ],
            ],
            [
                'name' => 'stationary-lay-down',
                'tr' => [
                    'content' => 'Ürün hakkında daha fazlasını keşfedin.',
                ],
                'en' => [
                    'content' => 'Find out more about Lay-Down Wind Machine',
                ],
            ],
            [
                'name' => 'stationary-3',
                'tr' => [
                    'content' => 'DETAY',
                ],
                'en' => [
                    'content' => 'DETAILS ',
                ],
            ],
            [
                'name' => 'stationary-next',
                'tr' => [
                    'content' => 'SONRAKİ',
                ],
                'en' => [
                    'content' => 'NEXT ',
                ],
            ],
            [
                'name' => 'stationary-back',
                'tr' => [
                    'content' => 'GERİ',
                ],
                'en' => [
                    'content' => 'BACK ',
                ],
            ],
            [
                'name' => 'stationary-4',
                'tr' => [
                    'content' => 'Ürün hakkında daha fazlasını keşfedin.',
                ],
                'en' => [
                    'content' => 'Find out more about Lay Down Wind Machines.',
                ],
            ],
            [
                'name' => 'stationary-5',
                'tr' => [
                    'content' => 'GALERİ',
                ],
                'en' => [
                    'content' => 'GALLERY',
                ],
            ],

            [
                'name' => 'stationary-6',
                'tr' => [
                    'content' => 'TÜM SABİT MODELLER',
                ],
                'en' => [
                    'content' => 'ALL STATIONARY MODELS',
                ],
            ],
            [
                'name' => 'stationary-7',
                'tr' => [
                    'content' => 'MEVCUT MODELLERİ İNCELE',
                ],
                'en' => [
                    'content' => 'SEE AVAILABLE STATIONARY MODELS',
                ],
            ],
            [
                'name' => 'stationary-8',
                'tr' => [
                    'content' => 'Ürün hakkında daha fazlasını keşfedin.',
                ],
                'en' => [
                    'content' => 'Find out more about Portable Wind Machines.',
                ],
            ],

            [
                'name' => 'stationary-9',
                'tr' => [
                    'content' => 'TÜM MOBİL MODELLER',
                ],
                'en' => [
                    'content' => 'ALL PORTABLE MODELS',
                ],
            ],
            [
                'name' => 'stationary-10',
                'tr' => [
                    'content' => 'MEVCUT MODELLERİ İNCELE',
                ],
                'en' => [
                    'content' => 'SEE AVAILABLE PORTABLE MODELS',
                ],
            ],

            [
                'name' => 'stationary-11',
                'tr' => [
                    'content' => 'ÖZELLİKLER',
                ],
                'en' => [
                    'content' => 'SPECIFICATIONS',
                ],
            ],
            [
                'name' => 'stationary-12',
                'tr' => [
                    'content' => 'KANAT',
                ],
                'en' => [
                    'content' => 'BLADE',
                ],
            ],
            [
                'name' => 'stationary-13',
                'tr' => [
                    'content' => 'Karbon Kanatlar',
                ],
                'en' => [
                    'content' => 'Carbon Blades',
                ],
            ],
            [
                'name' => 'stationary-14',
                'tr' => [
                    'content' => 'Yüksek verimli tasarım',
                ],
                'en' => [
                    'content' => 'High Efficiency Design',
                ],
            ],
            [
                'name' => 'stationary-15',
                'tr' => [
                    'content' => 'Diğer alternatiflere göre çok daha sert ve dayanıklı',
                ],
                'en' => [
                    'content' => 'Much stiffer and resistant compared to other alternatives',
                ],
            ],
            [
                'name' => 'stationary-16',
                'tr' => [
                    'content' => 'Kullanım ömrü diğer seçeneklerden daha uzun',
                ],
                'en' => [
                    'content' => 'Expected lifetime exceeds all other options',
                ],
            ],
            [
                'name' => 'stationary-17',
                'tr' => [
                    'content' => 'Statik momente göre ölçümleyip balanslama',
                ],
                'en' => [
                    'content' => 'Balanced with an accurate measurement of static moment ',
                ],
            ],


            [
                'name' => 'stationary-18',
                'tr' => [
                    'content' => 'KULE',
                ],
                'en' => [
                    'content' => 'TOWER ',
                ],
            ],
            [
                'name' => 'stationary-19',
                'tr' => [
                    'content' => '10.50mt uzunluk',
                ],
                'en' => [
                    'content' => '510mm diameter',
                ],
            ],
            [
                'name' => 'stationary-20',
                'tr' => [
                    'content' => '510mm çapında',
                ],
                'en' => [
                    'content' => '510mm in diameter ',
                ],
            ],
            [
                'name' => 'stationary-21',
                'tr' => [
                    'content' => '6 veya 8mm kalınlık',
                ],
                'en' => [
                    'content' => '6 or 8mm thickness ',
                ],
            ],
            [
                'name' => 'stationary-22',
                'tr' => [
                    'content' => 'Sıcak daldırma galvaniz',
                ],
                'en' => [
                    'content' => 'Hot dip galvanized ',
                ],
            ],
            [
                'name' => 'stationary-23',
                'tr' => [
                    'content' => 'KAVRAMA',
                ],
                'en' => [
                    'content' => 'CENTRIFUGAL<br>CLUTCH',
                ],
            ],
            [
                'name' => 'stationary-24',
                'tr' => [
                    'content' => '10’’ çap',
                ],
                'en' => [
                    'content' => '10’’ diameter ',
                ],
            ],
            [
                'name' => 'stationary-25',
                'tr' => [
                    'content' => 'Endüstriyel standartlara uygun özel üretim',
                ],
                'en' => [
                    'content' => 'Specifically produced with <br> industrial standards ',
                ],
            ],
            [
                'name' => 'stationary-26',
                'tr' => [
                    'content' => 'DİŞLİ <br>KUTULARI',
                ],
                'en' => [
                    'content' => 'GEARBOXES ',
                ],
            ],
            [
                'name' => 'stationary-27',
                'tr' => [
                    'content' => 'Dökme demir çerçeve',
                ],
                'en' => [
                    'content' => 'Cast iron frame ',
                ],
            ],
            [
                'name' => 'stationary-28',
                'tr' => [
                    'content' => 'TIMKEN rulmanlar',
                ],
                'en' => [
                    'content' => 'TIMKEN bearings ',
                ],
            ],
            [
                'name' => 'stationary-29',
                'tr' => [
                    'content' => ' 4.5dk içinde kulenin etrafında 360° dönebilen üst şanzıman',
                ],
                'en' => [
                    'content' => 'Top gearbox pivots through 360° around the tower in 4.5min ',
                ],
            ],
            [
                'name' => 'stationary-30',
                'tr' => [
                    'content' => 'KABİN',
                ],
                'en' => [
                    'content' => 'CABIN ',
                ],
            ],
            [
                'name' => 'stationary-31',
                'tr' => [
                    'content' => 'Soğuk şekillendirilmiş galvanizli saclarla tasarlanmıştır',
                ],
                'en' => [
                    'content' => 'Designed with cold-formed galvanized sheets ',
                ],
            ],
            [
                'name' => 'stationary-32',
                'tr' => [
                    'content' => 'Elektrostatik toz boyalı',
                ],
                'en' => [
                    'content' => 'Electrostatic powder painted ',
                ],
            ],
            [
                'name' => 'stationary-33',
                'tr' => [
                    'content' => 'Dış koşullara dayanıklı',
                ],
                'en' => [
                    'content' => 'Durable against external conditions ',
                ],
            ],
            [
                'name' => 'stationary-33-2',
                'tr' => [
                    'content' => 'Entegre 450lt yakıt deposu',
                ],
                'en' => [
                    'content' => 'Integrated 450 lt fuel tank',
                ],
            ],
            [
                'name' => 'stationary-34',
                'tr' => [
                    'content' => 'ŞAFT',
                ],
                'en' => [
                    'content' => 'DRIVE-LINE ',
                ],
            ],
            [
                'name' => 'stationary-35',
                'tr' => [
                    'content' => '3 parça',
                ],
                'en' => [
                    'content' => 'Three sections ',
                ],
            ],
            [
                'name' => 'stationary-35-2',
                'tr' => [
                    'content' => '2 parça',
                ],
                'en' => [
                    'content' => 'Three sections ',
                ],
            ],
            [
                'name' => 'stationary-36',
                'tr' => [
                    'content' => '3x3.02mt uzunluk',
                ],
                'en' => [
                    'content' => '3x3.02 mt in length ',
                ],
            ],
            [
                'name' => 'stationary-36-3',
                'tr' => [
                    'content' => '2x2.75mt uzunluk',
                ],
                'en' => [
                    'content' => '3x3.02 mt in length ',
                ],
            ],
            [
                'name' => 'stationary-36-2',
                'tr' => [
                    'content' => '100m çap',
                ],
                'en' => [
                    'content' => '100mm in diameter',
                ]
            ],
            [
                'name' => 'stationary-37',
                'tr' => [
                    'content' => 'GÜVENLİK <br> EKİPMANLARI',
                ],
                'en' => [
                    'content' => 'SAFETY <br> EQUIPMENT ',
                ],
            ],
            [
                'name' => 'stationary-38',
                'tr' => [
                    'content' => 'DCU ile tamamen entegre',
                ],
                'en' => [
                    'content' => 'Completely integrated with DCU ',
                ],
            ],
            [
                'name' => 'stationary-39',
                'tr' => [
                    'content' => 'Rüzgarlı koşullarda güvenli çalışma için anemometre',
                ],
                'en' => [
                    'content' => 'Anemometer for safe operation during windy conditions ',
                ],
            ],
            [
                'name' => 'stationary-39-2',
                'tr' => [
                    'content' => 'Dengede çalışma için 2 eksenli eğim sensörü',
                ],
                'en' => [
                    'content' => 'Anemometer for safe operation during windy conditions ',
                ],
            ],
            [
                'name' => 'stationary-40',
                'tr' => [
                    'content' => 'Kulenin devrilmesini engellemek için kule üzerine entegre titreşim anahtarı',
                ],
                'en' => [
                    'content' => 'Vibration switch equiped on towers to disable potential tower failures ',
                ],
            ],
            [
                'name' => 'stationary-41',
                'tr' => [
                    'content' => 'KONTROL <br> EKRANI',
                ],
                'en' => [
                    'content' => 'OPERATION ',
                ],
            ],
            [
                'name' => 'stationary-42',
                'tr' => [
                    'content' => 'Deep Sea Electronics DCU',
                ],
                'en' => [
                    'content' => 'Deep Sea Electronics DCU ',
                ],
            ],
            [
                'name' => 'stationary-43',
                'tr' => [
                    'content' => 'Otomatik ve manuel kullanım modları',
                ],
                'en' => [
                    'content' => 'Auto and manual mode ',
                ],
            ],
            [
                'name' => 'stationary-44',
                'tr' => [
                    'content' => 'Potansiyel arızaların uyarılar ile bildirimi',
                ],
                'en' => [
                    'content' => 'Visual parameters ',
                ],
            ],
            // [
            //     'name' => 'stationary-45',
            //     'tr' => [
            //         'content' => 'Uyarılar yayınlanarak giderilebilir potansiyel hatalar',
            //     ],
            //     'en' => [
            //         'content' => 'Displayable potential failures with warnings issued ',
            //     ],
            // ],
            [
                'name' => 'stationary-46',
                'tr' => [
                    'content' => 'TEMEL <br> BETONU',
                ],
                'en' => [
                    'content' => 'FOUNDATION ',
                ],
            ],
            [
                'name' => 'stationary-47',
                'tr' => [
                    'content' => 'C30 beton',
                ],
                'en' => [
                    'content' => 'Concrete C30 quality ',
                ],
            ],
            [
                'name' => 'stationary-48',
                'tr' => [
                    'content' => '8m³ hacim',
                ],
                'en' => [
                    'content' => 'Volume: 8 m³ ',
                ],
            ],
            // [
            //     'name' => 'stationary-49',
            //     'tr' => [
            //         'content' => 'Uluslararası Bina Koduna göre',
            //     ],
            //     'en' => [
            //         'content' => 'Accordingly with International Building Code ',
            //     ],
            // ],
            [
                'name' => 'stationary-50',
                'tr' => [
                    'content' => 'OPSİYONLAR',
                ],
                'en' => [
                    'content' => 'OPTIONS ',
                ],
            ],
            [
                'name' => 'stationary-51',
                'tr' => [
                    'content' => 'YATAR KULE<br>',
                ],
                'en' => [
                    'content' => 'LAY DOWN <br> TOWER ',
                ],
            ],
            [
                'name' => 'stationary-52',
                'tr' => [
                    'content' => 'İki parça, 1.75mt ve 8.75mt yükseklik',
                ],
                'en' => [
                    'content' => 'Two pieces, 1,75 mt & 8,75 mt in height ',
                ],
            ],
            [
                'name' => 'stationary-53',
                'tr' => [
                    'content' => 'Epoksi boyalı',
                ],
                'en' => [
                    'content' => 'Epoxy painted ',
                ],
            ],
            [
                'name' => 'stationary-18',
                'tr' => [
                    'content' => 'KULE',
                ],
                'en' => [
                    'content' => 'TOWER ',
                ],
            ],

            [
                'name' => 'stationary-54',
                'tr' => [
                    'content' => 'Hidrolik yatırma sistemi',
                ],
                'en' => [
                    'content' => 'Hydraulic lay-down system ',
                ],
            ],
            [
                'name' => 'stationary-55',
                'tr' => [
                    'content' => 'UZAKTAN KUMANDA',
                ],
                'en' => [
                    'content' => 'REMOTE CONTROL',
                ],
            ],
        
            [
                'name' => 'stationary-55-2',
                'tr' => [
                    'content' => 'Akıllı telefonda görüntüleme ve kontrol etme',
                ],
                'en' => [
                    'content' => 'Monitor and control through smart devices.',
                ],
            ],
            [
                'name' => 'stationary-55-3',
                'tr' => [
                    'content' => 'IOS ve Android uyumlu',
                ],
                'en' => [
                    'content' => 'Available on IOS and Android.',
                ],
            ],
            [
                'name' => 'stationary-available',
                'tr' => [
                    'content' => 'Mevcut',
                ],
                'en' => [
                    'content' => 'Available',
                ],
            ],



            [
                'name' => 'stationary-56',
                'tr' => [
                    'content' => 'PERVANE',
                ],
                'en' => [
                    'content' => 'PROPELLER',
                ],
            ],
            [
                'name' => 'stationary-57',
                'tr' => [
                    'content' => 'Uzunluk 6.00m',
                ],
                'en' => [
                    'content' => 'Length 6.00m',
                ],
            ],
            [
                'name' => 'stationary-58',
                'tr' => [
                    'content' => 'Uzunluk 5.80m',
                ],
                'en' => [
                    'content' => 'Length 5.80m',
                ],
            ],
            [
                'name' => 'stationary-59',
                'tr' => [
                    'content' => 'Uzunluk 5.60m',
                ],
                'en' => [
                    'content' => 'Length 5.60m',
                ],
            ],
            [
                'name' => 'stationary-60',
                'tr' => [
                    'content' => 'KULE',
                ],
                'en' => [
                    'content' => 'TOWER',
                ],
            ],
            [
                'name' => 'stationary-61',
                'tr' => [
                    'content' => 'Kalınlık 8mm',
                ],
                'en' => [
                    'content' => 'Thickness 8mm',
                ],
            ],
            [
                'name' => 'stationary-62',
                'tr' => [
                    'content' => 'Kalınlık 6mm',
                ],
                'en' => [
                    'content' => 'Thickness 6mm',
                ],
            ],
            [
                'name' => 'stationary-63',
                'tr' => [
                    'content' => 'Kalınlık 6mm',
                ],
                'en' => [
                    'content' => 'Thickness 6mm',
                ],
            ],
            [
                'name' => 'stationary-64',
                'tr' => [
                    'content' => 'MOTOR',
                ],
                'en' => [
                    'content' => 'ENGINE',
                ],
            ],
            [
                'name' => 'stationary-65',
                'tr' => [
                    'content' => ' VOLVO TAD Serisi <br>
                    129 kW (175 Hp)',
                ],
                'en' => [
                    'content' => ' VOLVO TAD Series <br>
                     129 kW (175 Hp)',
                ],
            ],
            [
                'name' => 'stationary-66',
                'tr' => [
                    'content' => 'VOLVO TAD Serisi<br>
                      105 kW (143 Hp)',
                ],
                'en' => [
                    'content' => 'VOLVO TAD Series  <br>
                    105 kW (143 Hp)',
                ],
            ],
            [
                'name' => 'stationary-67',
                'tr' => [
                    'content' => '
                    Traktör<br> PTO Versiyonu',
                ],
                'en' => [
                    'content' => '
                    Tractor<br> PTO Version',
                ],
            ],
            [
                'name' => 'stationary-68',
                'tr' => [
                    'content' => 'KORUMA <br> ALANI',
                ],
                'en' => [
                    'content' => 'PROTECTION <br> AREA COVERAGE',
                ],
            ],
            [
                'name' => 'stationary-69',
                'tr' => [
                    'content' => 'GÜVENLİK <br> EKİPMANLARI',
                ],
                'en' => [
                    'content' => 'SAFETY EQUIPMENT',
                ],
            ],
            [
                'name' => 'stationary-70',
                'tr' => [
                    'content' => 'Mevcut Değil',
                ],
                'en' => [
                    'content' => 'N/A',
                ],
            ],
            [
                'name' => 'stationary-71',
                'tr' => [
                    'content' => 'OPERASYON',
                ],
                'en' => [
                    'content' => 'OPERATION',
                ],
            ],
            
            [
                'name' => 'stationary-72',
                'tr' => [
                    'content' => 'Otomatik ve Manuel',
                ],
                'en' => [
                    'content' => 'Auto and Manual',
                ],
            ],
            [
                'name' => 'stationary-73',
                'tr' => [
                    'content' => 'Manuel',
                ],
                'en' => [
                    'content' => 'Manual',
                ],
            ],
            [
                'name' => 'stationary-74',
                'tr' => [
                    'content' => '<strong>LAY DOWN</strong><br>MODELS',
                ],
                'en' => [
                    'content' => '<strong>LAY DOWN</strong><br>MODELS',
                ],
            ],
            [
                'name' => 'stationary-75',
                'tr' => [
                    'content' => 'Tatmin edici bir çalışma için, PTO 540 rpm\'de çalışmalı ve 100 hp üretmelidir.',
                ],
                'en' => [
                    'content' => 'For satisfactory operation, PTO should run at 540 rpm and produce 100 hp',
                ],
            ],


            [
                'name' => 'portable-1',
                'tr' => [
                    'content' => '5.75mt uzunluk',
                ],
                'en' => [
                    'content' => '5,75mt in height',
                ],
            ],
            [
                'name' => 'portable-2',
                'tr' => [
                    'content' => '510mm çapında',
                ],
                'en' => [
                    'content' => '510mm in diameter',
                ],
            ],
            
            [
                'name' => 'portable-3',
                'tr' => [
                    'content' => '6mm kalınlık',
                ],
                'en' => [
                    'content' => '6mm thickness',
                ],
            ],
            
            [
                'name' => 'portable-4',
                'tr' => [
                    'content' => 'Epoksi boyalı',
                ],
                'en' => [
                    'content' => 'Epoxy painted',
                ],
            ],
            
            [
                'name' => 'portable-5',
                'tr' => [
                    'content' => 'Yatırma kolu',
                ],
                'en' => [
                    'content' => 'Lay-down handle',
                ],
            ],
            [
                'name' => 'portable-6',
                'tr' => [
                    'content' => 'RÖMORK',
                ],
                'en' => [
                    'content' => 'TRAILER',
                ],
            ],
            [
                'name' => 'portable-7',
                'tr' => [
                    'content' => '7 ton kapasiteli, pnömatik fren sistemli tek akslı dingil',
                ],
                'en' => [
                    'content' => '7 tons capacity axle with brake',
                ],
            ],
            [
                'name' => 'portable-8',
                'tr' => [
                    'content' => 'Denge için 4 adet ayarlanabilir, şanzımanlı römork krikosu',
                ],
                'en' => [
                    'content' => '4 adjustable jacks with gears for balancing',
                ],
            ],
            [
                'name' => 'portable-12',
                'tr' => [
                    'content' => 'KONTROL <br> EKRANI',
                ],
                'en' => [
                    'content' => 'OPERATION',
                ],
            ],
            [
                'name' => 'portable-13',
                'tr' => [
                    'content' => 'Deep Sea Electronics DCU',
                ],
                'en' => [
                    'content' => 'Deep Sea Electronics DCU',
                ],
            ],
            [
                'name' => 'portable-14',
                'tr' => [
                    'content' => 'Otomatik ve manuel kullanım modları',
                ],
                'en' => [
                    'content' => 'Auto and manual mode',
                ],
            ],
            [
                'name' => 'portable-15',
                'tr' => [
                    'content' => 'Görsel parametreler',
                ],
                'en' => [
                    'content' => 'Visual parameters',
                ],
            ],
            [
                'name' => 'portable-16',
                'tr' => [
                    'content' => 'Potansiyel arızaların uyarılar ile bildirimi',
                ],
                'en' => [
                    'content' => 'Displayable potential failures with warnings issued',
                ],
            ],
            [
                'name' => 'contact-us',
                'tr' => [
                    'content' => 'İLETİŞİME GEÇİN',
                ],
                'en' => [
                    'content' => 'CONTACT US',
                ],
            ],


            
            

        ];

        // Create
        foreach ($sentences as $sentence) {
            Sentence::create($sentence);
        }
    }
}
