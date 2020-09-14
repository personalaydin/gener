<?php

use Illuminate\Database\Seeder;
use App\Models\Entities\Page;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Delete All Pages
        $pages = Page::all();
        foreach ($pages as $row) {
            $row->forceDelete();
        }

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Page::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

        // Set new pages
        $pages = [
            [
                'template' => 'Home',
                'tr' => [
                    'meta_title' => 'Don pervanesi fiyatları ve Rüzgar Makinesi Üretimi Gener İstanbul',
                    'meta_description' => 'Rüzgar Makinesi ve don pervanesi üreticisi uygun fiyatları ile Gener sektörün Öncüsü. Siz de en iyiler ile çalışın',
                    'title' => 'Ana Sayfa',
                    'force_slug' => '/',
                ],
                'en' => [
                    'meta_title' => 'Frost fan prices and Wind Machine Production Gener Istanbul',
                    'meta_description' => 'Wind machine fan production and frost fan manufacturer Gener Istanbul Turkey. Quality production worldwide.  Work with the best',
                    'title' => 'Home Page',
                    'force_slug' => '/',
                ],
            ],
            [
                'template' => 'WindMachines',
                'tr' => [
                    'meta_title' => 'Don pervanesi fiyatları ve Rüzgar Makinesi Üretimi Gener İstanbul',
                    'meta_description' => 'Rüzgar Makinesi ve don pervanesi üreticisi uygun fiyatları ile Gener sektörün Öncüsü. Siz de en iyiler ile çalışın',
                    'title' => 'Rüzgar Makineleri',
                ],
                'en' => [
                    'meta_title' => 'Frost fan prices and Wind Machine Production Gener Istanbul',
                    'meta_description' => 'Wind machine fan production and frost fan manufacturer Gener Istanbul Turkey. Quality production worldwide.  Work with the best',
                    'title' => 'Wind Machines',
                ],
                'children' => [
                    [
                        'template' => 'Stationary',
                        'tr' => [
                            'meta_title' => 'Don pervanesi fiyatları ve Rüzgar Makinesi Üretimi Gener İstanbul',
                            'meta_description' => 'Rüzgar Makinesi ve don pervanesi üreticisi uygun fiyatları ile Gener sektörün Öncüsü. Siz de en iyiler ile çalışın',
                            'title' => 'Sabit',
                        ],
                        'en' => [
                            'meta_title' => 'Frost fan prices and Wind Machine Production Gener Istanbul',
                            'meta_description' => 'Wind machine fan production and frost fan manufacturer Gener Istanbul Turkey. Quality production worldwide.  Work with the best',
                            'title' => 'Stationary',
                        ],
                    ],
                    [
                        'template' => 'Portable',
                        'tr' => [
                            'meta_title' => 'Don pervanesi fiyatları ve Rüzgar Makinesi Üretimi Gener İstanbul',
                            'meta_description' => 'Rüzgar Makinesi ve don pervanesi üreticisi uygun fiyatları ile Gener sektörün Öncüsü. Siz de en iyiler ile çalışın',
                            'title' => 'Mobil',
                        ],
                        'en' => [
                            'meta_title' => 'Frost fan prices and Wind Machine Production Gener Istanbul',
                            'meta_description' => 'Wind machine fan production and frost fan manufacturer Gener Istanbul Turkey. Quality production worldwide.  Work with the best',
                            'title' => 'Portable',
                        ],
                    ],

                ]
            ],

            [
                'template' => 'OurSolutions',
                'tr' => [
                    'meta_title' => 'Don pervanesi fiyatları ve Rüzgar Makinesi Üretimi Gener İstanbul',
                    'meta_description' => 'Rüzgar Makinesi ve don pervanesi üreticisi uygun fiyatları ile Gener sektörün Öncüsü. Siz de en iyiler ile çalışın',
                    'title' => 'Zirai Don Hakkında',
                ],
                'en' => [
                    'meta_title' => 'Frost fan prices and Wind Machine Production Gener Istanbul',
                    'meta_description' => 'Wind machine fan production and frost fan manufacturer Gener Istanbul Turkey. Quality production worldwide.  Work with the best',
                    'title' => 'About Frost',
                ],
            ],
            [
                'template' => 'About',
                'tr' => [
                    'meta_title' => 'Don pervanesi fiyatları ve Rüzgar Makinesi Üretimi Gener İstanbul',
                    'meta_description' => 'Rüzgar Makinesi ve don pervanesi üreticisi uygun fiyatları ile Gener sektörün Öncüsü. Siz de en iyiler ile çalışın',
                    'title' => 'Hakkımızda',
                ],
                'en' => [
                    'meta_title' => 'Frost fan prices and Wind Machine Production Gener Istanbul',
                    'meta_description' => 'Wind machine fan production and frost fan manufacturer Gener Istanbul Turkey. Quality production worldwide.  Work with the best',
                    'title' => 'About',
                ],
            ],
            [
                'template' => 'Contact',
                'tr' => [
                    'meta_title' => 'Don pervanesi fiyatları ve Rüzgar Makinesi Üretimi Gener İstanbul',
                    'meta_description' => 'Rüzgar Makinesi ve don pervanesi üreticisi uygun fiyatları ile Gener sektörün Öncüsü. Siz de en iyiler ile çalışın',
                    'title' => 'İletişim',
                ],
                'en' => [
                    'meta_title' => 'Frost fan prices and Wind Machine Production Gener Istanbul',
                    'meta_description' => 'Wind machine fan production and frost fan manufacturer Gener Istanbul Turkey. Quality production worldwide.  Work with the best',
                    'title' => 'Contact',
                ],
            ],
            [
                'template' => 'Gallery',
                'tr' => [
                    'meta_title' => 'Don pervanesi fiyatları ve Rüzgar Makinesi Üretimi Gener İstanbul',
                    'meta_description' => 'Rüzgar Makinesi ve don pervanesi üreticisi uygun fiyatları ile Gener sektörün Öncüsü. Siz de en iyiler ile çalışın',
                    'title' => 'Galeri',
                ],
                'en' => [
                    'meta_title' => 'Frost fan prices and Wind Machine Production Gener Istanbul',
                    'meta_description' => 'Wind machine fan production and frost fan manufacturer Gener Istanbul Turkey. Quality production worldwide.  Work with the best',
                    'title' => 'Gallery',
                ],
                'children' => [
                    [
                        'template' => 'GalleryDetail',
                        'image' => 'gallery-1.jpg',
                        'tr' => [
                            'meta_title' => 'Don pervanesi fiyatları ve Rüzgar Makinesi Üretimi Gener İstanbul',
                            'meta_description' => 'Rüzgar Makinesi ve don pervanesi üreticisi uygun fiyatları ile Gener sektörün Öncüsü. Siz de en iyiler ile çalışın',
                            'title' => 'Üretim',
                        ],
                        'en' => [
                            'meta_title' => 'Frost fan prices and Wind Machine Production Gener Istanbul',
                            'meta_description' => 'Wind machine fan production and frost fan manufacturer Gener Istanbul Turkey. Quality production worldwide.  Work with the best',
                            'title' => 'Production',
                        ],
                        'galleryDefault' => [
                            [
                                'image' => '1.jpg',
                                'group' => 'default',
                            ],
                            [
                                'image' => '2.jpg',
                                'group' => 'default',
                            ],
                            [
                                'image' => '4.jpg',
                                'group' => 'default',
                            ],
                            [
                                'image' => '5.jpg',
                                'group' => 'default',
                            ],
                            [
                                'image' => '8.jpg',
                                'group' => 'default',
                            ],
                        ],
                    ],
                    [
                        'template' => 'GalleryDetail',
                        'image' => 'gallery-2.jpg',
                        'tr' => [
                            'meta_title' => 'Don pervanesi fiyatları ve Rüzgar Makinesi Üretimi Gener İstanbul',
                            'meta_description' => 'Rüzgar Makinesi ve don pervanesi üreticisi uygun fiyatları ile Gener sektörün Öncüsü. Siz de en iyiler ile çalışın',
                            'title' => 'Sevkiyat',
                        ],
                        'en' => [
                            'meta_title' => 'Frost fan prices and Wind Machine Production Gener Istanbul',
                            'meta_description' => 'Wind machine fan production and frost fan manufacturer Gener Istanbul Turkey. Quality production worldwide.  Work with the best',
                            'title' => 'Shipment',
                        ],
                        'galleryDefault' => [
                            [
                                'image' => '3.jpg',
                                'group' => 'default',
                            ]
                        ],
                    ],
                    [
                        'template' => 'GalleryDetail',
                        'image' => 'gallery-3.jpg',
                        'tr' => [
                            'meta_title' => 'Don pervanesi fiyatları ve Rüzgar Makinesi Üretimi Gener İstanbul',
                            'meta_description' => 'Rüzgar Makinesi ve don pervanesi üreticisi uygun fiyatları ile Gener sektörün Öncüsü. Siz de en iyiler ile çalışın',
                            'title' => 'Rüzgar Makineleri',
                        ],
                        'en' => [
                            'meta_title' => 'Frost fan prices and Wind Machine Production Gener Istanbul',
                            'meta_description' => 'Wind machine fan production and frost fan manufacturer Gener Istanbul Turkey. Quality production worldwide.  Work with the best',
                            'title' => 'Wind Machines',
                        ],
                        'galleryDefault' => [
                            [
                                'image' => '6.jpg',
                                'group' => 'default',
                            ],
                            [
                                'image' => '7.jpg',
                                'group' => 'default',
                            ]
                        ],
                    ],
                    // [
                    //     'template' => 'GalleryDetail',
                    //     'image' => 'gallery-4.jpg',
                    //     'tr' => [
                    //         'title' => "Videolar",
                    //     ],
                    //     'en' => [
                    //         'title' => "Videos",
                    //     ],
                    //     'galleryDefault' => [
                    //         [
                    //             'image' => '1.jpg',
                    //             'group' => 'default',
                    //         ],
                    //         [
                    //             'image' => '2.jpg',
                    //             'group' => 'default',
                    //         ],
                    //         [
                    //             'image' => '3.jpg',
                    //             'group' => 'default',
                    //         ],
                    //         [
                    //             'image' => '4.jpg',
                    //             'group' => 'default',
                    //         ],
                    //         [
                    //             'image' => '5.jpg',
                    //             'group' => 'default',
                    //         ],
                    //         [
                    //             'image' => '6.jpg',
                    //             'group' => 'default',
                    //         ],
                    //         [
                    //             'image' => '7.jpg',
                    //             'group' => 'default',
                    //         ],
                    //         [
                    //             'image' => '8.jpg',
                    //             'group' => 'default',
                    //         ],
                    //     ],
                    // ],
                ]
            ],
            [
                'template' => 'InformationText',
                'tr' => [
                    'meta_title' => 'Don pervanesi fiyatları ve Rüzgar Makinesi Üretimi Gener İstanbul',
                    'meta_description' => 'Rüzgar Makinesi ve don pervanesi üreticisi uygun fiyatları ile Gener sektörün Öncüsü. Siz de en iyiler ile çalışın',
                    'title' => 'Bilgilendirme Metni',
                    'content' => '
                    <div class="gizlilik-politika-container">
<p><h2>GİZLİLİK ve KİŞİSEL VERİLERİN KORUNMASI POLİTİKASI</h1></p>
<p><h3>TANIMLAR</h3></p>
<p>İşbu Politikada kullanılan kısaltmalar aşağıdaki gibidir. </p>

<p><h3>1.ŞİRKET: </h3></p>
<p>Sitenin resmi sahibi olan Kanuni Merkez: Hacı Sabancı OSB 23 Nisan Cad. No 8 Sarıçam/Adana/Türkiye adresli PFI End .Kapılar ve Otom. Sis. San. Tic. A.Ş. </p>

<p><h3>2.SİTE: </h3></p>
<p>www.gener.com.tr domain adına sahip internet sitesi. </p>
<p><h3>3.ZİYARETÇİ: </h3></p>
<p>Siteyi kişisel iletişim bilgilerini vermeden okuyarak bilgilenme amaçlı ziyaret eden, ya da kişisel verilerini sitede bulunan formlar aracılığıyla ve kendi rızasıyla site sahibi şirket ile paylaşan şahıs veya şahıslar. Politika içinde bundan sonra Kullanıcı olarak anılacaktır. </p>
<p><h3>MADDELER</h3></p>
<p><h3>1.Gizlilik: </h3></p>
<p>Bu SİTE, Kullanıcıları içeriği ŞİRKET tarafından kontrol edilmeyen başka web sitelerine taşıyan bağlantılar içermektedir. Bu SİTE’de diğer internet-web sitelerine bağlantı verdiği hallerde tüm kullanım ve işlemler için o sitelere ait gizlilik-güvenlik politikası ve kullanım şartları geçerlidir; SİTE’den reklam, banner, içerik görmek veya başka herhangi bir amaç ile ulaşılan diğer web sitelerinden bilgi kullanımları (özellikle bu web sitelerinin toplayabileceği kişisel verilerin derlenmesi, kullanımı veya ifşa edilmesinden), keza sitelerin etik ilkeleri, gizlilik-güvenlik prensipleri, servis kalitesi ve diğer uygulamaları sebebi ile oluşabilecek ihtilaf, maddi-manevi zarar ve kayıplardan ŞİRKET sorumlu değildir. Dış web sitelerine yönlendiren bir bağlantıya tıkladığınızda bu sitelerin üçüncü şahıslar tarafından hazırlanması ve kontrol edilmesi sebebiyle ŞİRKET’in sorumluluk alanından çıkılmış olduğunu, bu noktadan sonra ŞİRKET’in hiçbir şekilde sorumluluğunun olmadığını kabul etmektesiniz. SİTE kullanımı esnasında oluşabilecek herhangi bir hata, kesinti, bilgi naklinde gecikme, bilgisayar virüsü, hat ve elektrik arızası sonucunda ortaya çıkabilecek doğrudan veya dolaylı zarar, ziyan ve masraflardan ŞİRKET sorumlu değildir. Benzer biçimde başka web sitelerinden ŞİRKET’in izni olsun ya da olmasın SİTE’ye link verildiğinde de, bu tür linklerin kontrol edilememesinden kaynaklanan yapı nedeniyle ŞİRKET’in herhangi bir sorumluluğu bulunmamaktadır. </p>

<p>SİTE’de yer alan bilgi, materyal ve bunların düzenlenmesi konusundaki telif hakları ŞİRKET’e aittir. Sitemiz materyallerine ait tüm telif hakları, tescilli marka, patent, entelektüel ve diğer mülkiyet hakları ŞİRKET’de saklıdır. Bir kişi ve/veya kuruluş, önceden ŞİRKET’in iznini almadıkça, SİTE’nin belli bir kısmını başka bir web sitesinde kullanamaz, başka bir web sitesinin bağlantısını kuramaz.
Ek bilgi almak istediğiniz konularda SİTE’de belirtilen iletişim yolları ile ŞİRKET’e danışabilirsiniz. </p>
<p><h3>2.Kişisel Olmayan ve Derleme Bilgiler: </h3></p>
<p>SİTE ziyaret edildiğinde, SİTE’ye hangi IP’den giriş yaptığınız, sitemizde ziyaret ettiğiniz sayfalar ve her bir sayfa, bilgi formu ve uygulamada ne kadar süre harcadığınız gibi genel bilgiler kaydedilir. Bu bilgilerin tutulmasının amacı ŞİRKET’in sitesini düzenli olarak izleyerek geliştirmek ve hizmetlerini iyileştirmektir. Bu bilgiler genellikle kişisel tanımlama bilgileri ile bağlantılı olmayan IP adresleri kullanılarak alınır. </p>
<p><h3>3.Kişisel Veriler: </h3></p>
<p>Bir Kullanıcı, SİTE üzerinden bir soru gönderdiğinde, belirli bir hizmet için bilgi formu doldurduğunda veya başvuruda bulunduğunda, kişisel verileri (isim, fatura ve teslimat adresi, telefon numarası, e-posta adresi ve/veya sosyal medya/mesajlaşma hesabı kimliği gibi) ŞİRKET tarafından Kullanıcının hizmet, bilgi veya başvuru talebinin yerine getirilmesi amacıyla sınırlı olarak form alanlarında doldurulması zorunlu alanlar aracılığıyla, Kullanıcı’dan talep edilebilir ve kaydedilebilir. Ayrıca Kullanıcı’nın kişisel verilerini (isim, fatura ve teslimat adresi, telefon numarası, e-posta adresi ve/veya sosyal medya/mesajlaşma hesabı kimliği gibi) SİTE üzerinden vereceği açık rıza ile ŞİRKET ile paylaşması halinde kişisel veriler ŞİRKET tarafından her türlü ürün-hizmet tanıtım, reklam, iletişim, promosyon, satış, pazarlama, üyelik işlemleri, bilgilendirmeleri ve uygulamaları yapılması amacı ile, form alanlarında doldurulması zorunlu alanlar aracılığıyla, ŞİRKET tarafından kaydedilebilir. ŞİRKET ve SİTE ile sosyal medya sayfalarımız ve bunlarla sınırlı olmamak üzere her türlü yazılı, sözlü ve elektronik kanallar aracılığı ile; kişisel ve/veya hassas nitelikli kişisel verileriniz; kaydedilebilir, depolanabilir, güncellenebilir, periyodik olarak kontrol edilebilir, yeniden düzenlenebilir, sınıflandırılabilir, muhafaza edilebilir ve sair suretler ile işlenebilir. ŞİRKET, Kullanıcı’lardan edinilen kişisel verileri; işbu Gizlilik ve Kişisel Verilerin Korunması Politikası’nda belirtilen amaçların gerçekleştirilmesi kapsamında gerektiğinde yurt içi ve yurt dışındaki iş ortakları ile, Web sitesi barındırma, veri analizi, ödeme işlemleri, sipariş işleme, bilgi teknolojileri ve ilgili altyapıların sağlanması, müşteri hizmetleri, e-posta gönderimi, denetleme ve benzer hizmetleri sunan üçüncü kişi hizmet sağlayıcıları ve tedarikçileri, sigorta şirketleri ile paylaşabilir veya bunlara ifşa edebilir, yurt dışına aktarabilir. Kişisel verilerin aktarıldığı üçüncü kişi, aktarılan verileri işbu bildirimde belirtilen amaçlar dışında kullanmayacak, sadece PFI End .Kapılar ve Otom. Sis. San. Tic. A.Ş.’nin veri işleme amaçları doğrultusunda kullanacaktır. Kişisel verileriniz 6698 sayılı Kişisel Verilerin Korunması Kanunu (“Kanun”) madde 5 ve madde 6’da belirtilen açık rıza, kanunlarda açıkça öngörülmesi, hizmet sözleşmesinin kurulması ve ifası, bir hakkın tesisi, kullanılması veya korunması, ŞİRKET olarak meşru menfaatlerimizi ve hukuki yükümlülüklerimizi yerine getirmek hukuki sebepleri kapsamında işlenecektir. </p>
<p>ŞİRKET kişisel verilerinizi aşağıdaki amaçlarla kullanabilir: </p>
<p>
<ul>
<li>ŞİRKET tarafından sağlanan hizmetleri sunmak. </li>
<li>Sorularınıza yanıt vermek. </li>
<li>Haber bültenleri gibi ilginizi çekebileceğini düşündüğümüz pazarlama iletişimlerini, iletişim tercihlerinize göre size göndermek. </li>
<li>Size özel ürünler, pazarlama mesajları, teklifler ve içerikler sunmak. </li>
<li>Anketler, çekilişler, yarışmalar ve benzer promosyonlara katılmanıza olanak sağlamak (bu etkinliklerden bazılarında, kişisel verilerinizi nasıl kullandığımız ve ifşa ettiğimize ilişkin daha fazla bilgi içeren ek kurallar uygulanabilir, bu nedenle söz konusu kuralları dikkatle okumanızı öneririz). </li>
<li>İş fırsatlarımız, iş ilanlarımız konusunda bilgilendirme yapmak. </li>
<li>Veri analizi, denetimler, suç/dolandırıcılık izleme ve önleme, güvenlik, yeni ürünler geliştirme, test etme, hizmetlerimizi geliştirme, iyileştirme ya da değiştirme, kullanım trendlerini belirleme, tanıtım kampanyalarımızın etkinliğini belirleme, iş faaliyetlerimizi yerine getirme ve genişletme gibi iş amaçlarımız. </li>
<li>Bu bildirimin amacıyla tutarlı diğer faaliyetleri gerçekleştirmek. </li>
</ul>
</p>
<p>Kişisel verilerinizin işbu Gizlilik ve Kişisel Verilerin Korunması Politikası’nda belirtilen amaçlarla kullanılması ve ifşası konusunda aşağıda belirtilen yöntemlerden birini kullanarak iletişim bilgilerinize ve iletişim tercihlerinize erişebilir, bunları güncelleyebilir, ŞİRKET’e sağladığınız kişisel verilere erişmek, bunları güncellemek, silmek, yok etmek, düzeltmek veya aşağıda ifade edilen diğer haklarınız konusundaki taleplerinizi; Kanun’da ve 30356 Veri Sorumlusuna Başvuru Usul ve Esasları Hakkında Tebliğ’de ifade edildiği üzere yazılı ve imzalı bir şekilde aşağıda belirtilen başvuru adresine bizzat elden teslim edebilir, noter aracılığı ile gönderebilir, mobil imza veya ŞİRKET’e daha önce bildirmiş olduğunuz ve sistemimizde kayıtlı olan elektronik posta adresini kullanarak info@gener.com.tr adresine gönderebilirsiniz. Mümkün olan en kısa sürede ve yürürlükteki mevzuat uyarınca talebinizi (taleplerinizi) yerine getireceğiz. </p>

<p>BAŞVURU ADRESİ: Hacı Sabancı OSB 23 Nisan Cad. No 8 Sarıçam/Adana/Turkey
Daha uzun bir saklama süresi yasalarca gerekmedikçe ya da izin verilmedikçe, kişisel verilerinizi işbu Gizlilik ve Kişisel Verilerin Korunması Politikası’nda belirtilen amaçları yerine getirmek için gerekli süre boyunca saklarız. Kişisel verileriniz azami yirmi yıl boyunca saklanacaktır. </p>

<p>Kullanıcı, Kanun çerçevesinde, ŞİRKET’e başvurarak; (a) kişisel verilerin işlenip işlenmediğini öğrenme, (b) kişisel veriler işlenmişse buna ilişkin bilgi talep etme, (c) kişisel verilerin işlenme amacını ve bunların amacına uygun kullanılıp kullanılmadığını öğrenme, (d) yurt içinde veya yurt dışında kişisel verilerin aktarıldığı üçüncü kişileri bilme, (e) kişisel verilerin eksik veya yanlış işlenmiş olması halinde bunların düzeltilmesini isteme, (f) kişisel verilerin silinmesini veya yok edilmesini isteme, (g) yukarıdaki e ve f’de belirtilen talepler uyarınca yapılan işlemlerin, kişisel verilerin aktarıldığı üçüncü kişilere bildirilmesini isteme, (h) işlenen verilerin münhasıran otomatik sistemler vasıtasıyla analiz edilmesi suretiyle kişinin kendisi aleyhine bir sonucun ortaya çıkmasına itiraz etme, (i) Kişisel verilerin kanuna aykırı olarak işlenmesi sebebiyle zarara uğraması halinde zararın giderilmesini talep etme haklarına sahiptir. </p>
<p><h3>4.Çerezler (Cookies) : </h3></p>
<p>Zaman içerisinde, ŞİRKET veya ortakları bilgisayarınıza “çerez” gönderebilir. Çerezler, web sunucusu tarafından İnternet tarayıcınıza gönderilen ve daha sonra bilgisayarınızın hafızasında depolanan, küçük verilerdir. Çerezler bilgisayarınızın hafızasından veya diğer web sayfalarınca yaratılmış çerez dosyalarından veri sağlayamaz. Çerezler sisteminize zarar vermez. Çerezler SİTE de nerelerin ziyaret edildiğini ya da hangi sayfaların tarafınızdan düzenlenip düzenlenmediğini görmek için kullanılır. Bu uygulamayla siteye yaptığınız tekrarlı ziyaretlerin kolaylaşması sağlanır. İnternet tarayıcınızın ayarlarını değiştirerek çerezleri kabul etmeyebilir ya da bilgisayarınıza bir çerez gönderildiğinde tarayıcınızın sizi uyarmasını sağlayabilirsiniz. Tarayıcınızın ayarlarını başlangıçtaki haline döndürerek genellikle tüm çerezleri kabul etmiş olursunuz. Çerezleri reddederseniz sitemizde ve diğer web sitelerinde karşılaşacağınız uygulamalar azalabilir ve bazı özellikler istenen şekilde çalışmayabilir. Bu azalan uygulamalardan ve aksaklıklardan ŞİRKET sorumlu değildir. </p>
<p><h3>5.Veri Güvenliği: </h3></p>
<p>Sitemizde izinsiz girişi engellemek, veri doğruluğunu sürdürmek ve bilginin doğru kullanımını sağlamak için site kanalıyla toplanmış bilgiyi koruyan ve güvenliğini sağlayan fiziksel, elektronik ve yönetimsel prosedürler uygulanmaktadır. Tüm şartlara rağmen ŞİRKET, kişisel verilerin ŞİRKET sistemlerinden yasal olmayan yollarla elde edilemeyeceğini garanti edemez ve ŞİRKET’in online servislerinin kullanılması halinde sistemlerimizde güvenlik açığı riski de dahil olmak üzere ortaya çıkabilecek tüm riskleri ve sorumluluğu kabul etmiş sayılırsınız. </p>
<p><h3>6.Bağlantılı Siteler: </h3></p>
<p>Bu site, kullanıcılarını içeriği ŞİRKET tarafından kontrol edilmeyen başka web sitelerine taşıyan bağlantılar içermektedir. Bağlantı verilmiş olan bu web siteleri, bu politikada belirtilen gizlilik hükümlerinden farklı koşullar içerebilir. Bu web sitelerinin toplayabileceği kişisel verilerin derlenmesi, kullanımı veya ifşa edilmesinden ŞİRKET sorumlu değildir. ŞİRKET bu şekilde bir derleme, kullanım veya ifşadan ötürü ortaya çıkabilecek zararların sorumluluğunu kabul etmemektedir. Başka sitelere ait bağlantıların ŞİRKET sitesinde yer alıyor olması, o sitelerin güvenli olduğu anlamına gelmemekte ve tamamen kullanıcının sorumluluğundadır. Dış sitelere yönlendiren bir bağlantıya tıkladığınızda bu sitelerin 3. şahıslar tarafından hazırlanması ve kontrol edilmesi sebebiyle ŞİRKET sorumluluk alanından çıkılmış olduğunu, bu noktadan sonra Kullanıcı ŞİRKET’in hiçbir şekilde sorumluluğunun olmadığını kabul eder. Site kullanımı esnasında oluşabilecek herhangi bir hata, kesinti, bilgi naklinde gecikme, bilgisayar virüsü, hat ve elektrik arızası sonucunda ortaya çıkabilecek doğrudan veya dolaylı zarar, ziyan ve masraflardan ŞİRKET sorumlu değildir. Benzer biçimde başka sitelerden ŞİRKET’in izni olsun ya da olmasın ŞİRKET sitesine link verildiğinde de, bu tür linklerin kontrol edilememesinden kaynaklanan yapı nedeniyle ŞİRKET’in herhangi bir sorumluluğu bulunmamaktadır. </p>
<p><h3>7.Sitede Verilen Bilgiler: </h3></p>
<p>ŞİRKET, SİTE içeriğinde, tasarımında, erişiminde haber vermeksizin değişiklik ve/veya kısıtlama yapma hakkını saklı tutar. ŞİRKET, herhangi bir nedenle ve tamamen kendi kararıyla SİTE erişimi kısıtlayabilir veya kaldırabilir.
ŞİRKET, SİTE içeriğini güncel ve doğru tutmak için elinden gelen tüm çabayı sarf etmektedir ancak bu bilgilerin doğruluğunu garanti etmez ve bu bilgilerin doğruluğuna, tam olmasına ve güncel olmasına ilişkin hiçbir sorumluluğu kabul etmez. Bu bilgilerin kullanımı Kullanıcı inisiyatifindedir ve yasal bağlayıcılığı yoktur. </p>
<p><h3>8.Politika Değişiklikleri: </h3></p>
<p>Bu Politika değişikliğe tabidir ve ŞİRKET tarafından herhangi bir duyuruda bulunulmaksızın değiştirilebilir. Kullanım koşullarında yapılan değişiklik / değişiklikler SİTE’ye konulmalarından itibaren geçerlilik kazanacaktır. Kullanım koşullarının güncel halinin kontrolü Kullanıcı’nın yükümlülüğündedir. </p>
</div>
'
                ],
                'en' => [
                    'meta_title' => 'Frost fan prices and Wind Machine Production Gener Istanbul',
                    'meta_description' => 'Wind machine fan production and frost fan manufacturer Gener Istanbul Turkey. Quality production worldwide.  Work with the best',
                    'title' => 'Information Text',
                    'content' => '<div class="gizlilik-politika-container">
                    <p><h2> PRIVACY AND PROTECTION OF PERSONAL DATA POLICY </h1></p>
                    
                    
                    <p>I hereby acknowledge that I have read and understood the Privacy and Protection of Personal Data Policy (the “Policy”) of PFI End .Kapılar ve Otom. Sis. San. Tic. A.Ş. (the “Company”) on its website, all provisions stated below, as well as the rights stated in the Policy and granted to me by the Law No.6698 on the Protection of Personal Data (the “Law”) and that I know that I can apply to the Company as explained below regarding my rights. </p>
                    <p><h3>Your Rights as the Subject</h3></p>
                    <p> (a) Learn whether personal data has been processed, (b) if it has been processed, to ask for information on the process, (c) learn about the purpose of data processing, and whether it has been used to serve the initial purpose, (d) find out about the third persons the personal data was transferred to in the country and abroad, (e) ask for the correction of personal data if they have been processed incompletely or inaccurately, (f) ask for the deletion or destruction of personal data in line with the terms specified in Article 7 of the Law, (g) ask for the notification of third persons about the actions taken in response to requests under (e) and (f) above, (h) object to a conclusion against themselves reached through an analysis of the processed data carried out exclusively by automated systems, and (i) claim indemnification for losses should they incur a loss due to the unlawful processing of personal data. </p>
                    <p><h3>Purpose and Legal Grounds of Processing Personal Data, Method of Transfer and Collection</h3></p>
                    <p>Your personal data, considered within the scope of the Law will be processed in compliance with the laws by the Company and its call centers acting on behalf of the Company, or through this website, as well as its social media accounts, or any other written, oral or electronic channel not limited to these examples for any product-service promotion, advertising, communication, special offers, sales, marketing, and member registration, notification and execution purposes, as well as to provide services offered by the Company, respond to your questions, duly provide the accommodation service offered by the Company (such as obtaining and processing personal or private personal data in order to deliver services such as the selection of the location and type of the room, preference for food, bed and pillows, baby and child care services/activities and kids club), send to you marketing communications through your preferred channel of the content we think might be of interest to you such as newsletters, provide you with the opportunity to participate in surveys, lotteries, competitions and similar promotions (some of these activities might involve additional rules with more information on the way we use and disclose your personal data. Therefore, we recommend you read these said rules carefully.), complete your purchase, for instance, make your payment, ensure that your order is delivered to you, contact you about your purchase, provide the relevant customer service to you, for business purposes such as data analysis, audits, crime/fraud surveillance and prevention, security, new product development, testing, service development/improvement or change, identification of usage trends, assessment of the effectiveness of promotional campaigns, and execution and development of business activities, and for fulfilling accounting, billing, reconciliation, and collection procedures. With a view to realize all these, your personal and/or sensitive personal data will be saved and stored, updated, periodically reviewed, rearranged, classified, captured or processed in other ways as long as needed for the given purposes, and if needed, they will be shared with domestic and international business partners, third party service providers and suppliers for services such as web hosting, data analysis, provision of IT technologies and relevant infrastructure, payment transactions, customer services, credit card services, e-mailing, and auditing, and that it will be disclosed to the said parties, transferred abroad, and processed in other ways. The third party to which personal data is transferred will not use the data for purposes other than those specified herewith in this statement and will only employ them for PFI End .Kapılar ve Otom. Sis. San. Tic. A.Ş.\'s data processing purposes. Your personal data will be processed within the scope of Articles 5 and 6 of the Law covering open consent, explicit requirement in the legislation, establishment and execution of a service agreement, establishment, use or protection of a right, protection of our legitimate interest as a Company and performing our legal obligations. </p>
                    
                    <p>Vis-à-vis the processing of your personal data for the purposes explained above, you can use any one of the methods stated below to access and update your contact details and choice of communication and, as stipulated in the Law and the Communiqué on the Procedures and Principles of Application to the Data Controller, you can personally deliver your requests to access, update, delete or edit the personal data you have provided to the Company or any request regarding your rights listed in the Law and this text in writing and signed to the application address below, send it through a notary public, or send an e-mail to info@gener.com.tr using your secure electronic signature, mobile signature or the e-mail account you have declared to the Company before and that is registered in our system. We will respond to your request(s) at our earliest convenience and in line with the current legislation. </p>
                    <p><h3>APPLICATION ADDRESS: Hacı Sabancı OSB 23 Nisan Cad. No 8 Sarıçam/Adana/Turkey</h3></p>
                    <p>Unless a longer storage period is required or prohibited by law, we will store your personal data as long as needed for the purposes explained in this Policy. Your personal data will be stored for a maximum of twenty years. </p>
                    <p><h3>Open Consent Text</h3></p>
                    <p>As knowledgeable as to leave no doubt, I hereby give my open, informed consent as stipulated in Articles 5/1 and 6/2 of the Law that my personal data obtained by the Company can be saved and stored, as long as needed for the given purposes above, updated, periodically reviewed, rearranged, classified, captured or processed in other ways as long as needed for the given purposes for any product-service promotion, advertising, communication, special offers, sales, marketing, and member registration, notification and execution purposes, as well as the delivery of marketing communications and newsletters through the communication channel of my choice, for enabling me to participate in promotions such as surveys, lotteries and competitions, and for duly providing the accommodation service offered by the Company (such as obtaining and processing personal or private personal data in order to deliver services such as the selection of the location and type of the room, preference for food, bed and pillows, baby and child care services/activities and kids club), and that they can be shared with the Company’s domestic and international business partners, third party service providers and suppliers for services such as web hosting, provision of IT technologies and relevant infrastructure, customer services and e-mailing, and that it can disclose this information to the said parties, transfer it abroad, and that the third party to which personal data is transferred will not use the data for purposes other than those specified herewith in this statement and will only employ them for PFI End .Kapılar ve Otom. Sis. San. Tic. A.Ş.’s data processing purposes. </p></div>'
                ],
            ],
        ];

        // Create
        foreach ($pages as $attributes) {
            $this->createRow($attributes);
        }
    }

    public function createRow($attributes, $parent = null)
    {
        $children = array_pull($attributes, 'children');
        $galleryDefault = array_pull($attributes, 'galleryDefault');

        // Create instance
        $instance = Page::create($attributes);

        if ($parent) {
            $instance->appendToNode($parent);
        }
        $instance->save();

        // Create Gallery Default
        if ($galleryDefault) {
            foreach($galleryDefault as $gallery) {
                $instance->gallery()->create($gallery);
            }
        }

        // Create children
        $relation = new \Illuminate\Database\Eloquent\Collection;
        foreach ((array)$children as $child) {
            $relation->add($child = $this->createRow($child, $instance));
            $child->setRelation('parent', $instance);
        }
        $instance->refreshNode();
        return $instance->setRelation('children', $relation);
    }
}
