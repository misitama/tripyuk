import Home from './components/home/index.vue';

// pesawat komponen
import Pesawat from './components/pesawat/pesawat-index.vue';
import CariTiketPesawat from './components/pesawat/cari-pesawat/index.vue';
import DetailTiketPesawat from './components/pesawat/detail-pesawat/index.vue';
import PemesananTiketPesawat from './components/pesawat/pemesanan-pesawat/index.vue';
import CekPemesananTiketPesawat from './components/pesawat/pemesanan-pesawat/cek-pemesanan.vue';
import Pembayaran from './components/pembayaran/index.vue';
import ProsesPembayaran from './components/pembayaran/proses-pembayaran.vue';
import Sukses from './components/pembayaran/sukses.vue';

// kereta api komponen
import KeretaApi from './components/kai/kai-index.vue';

// bus komponen
import Bus from './components/bus/bus-index.vue';

// kapal komponen
import Kapal from './components/kapal/kapal-index.vue';

// umroh komponen
import Umroh from './components/umroh/umroh-index.vue';

// haji komponen
import Haji from './components/haji/haji-index.vue';

// tour komponen
import Tour from './components/tour/tour-index.vue';
import TourDomestik from './components/tour/tour-domestik.vue';
import TourInternational from './components/tour/tour-international.vue';

// hotel komponen
import Hotel from './components/hotel/hotel-index.vue';

// penjemputan komponen
import Penjemputan from './components/penjemputan/penjemputan-index.vue';

// rental mobil komponen
import RentalMobil from './components/rentalmobil/rentalmobil-index.vue';

// kuliner komponen
import Kuliner from './components/kuliner/kuliner-index.vue';

// Ecommerce komponen
import Ecommerce from './components/ecommerce/ecommerce-index.vue';

import Promo from './components/promo/promo-index.vue';
import DetailPromo from './components/promo/promo-detail.vue';

// footer menu
import Blog from './components/blog/blog-index.vue';
import Partner from './components/partner/partner-index.vue';
import Karir from './components/karir/karir-index.vue';
import HowtoBook from './components/howtobook/index.vue';
import SyaratKetentuan from './components/syarat-ketentuan/index.vue';
import KebijakanPrivasi from './components/kebijakan-privasi/index.vue';
import Faq from './components/faq/faq-index.vue';

export default [
    {
        path: '/',
        name: 'home',
        component: Home
    },

    // pesawat route
    {
        path : '/tiket-pesawat',
        name : 'tiketpesawat',
        component : Pesawat
    },
    {
        path: '/cari-tiket-pesawat/:departId/:arrivalId/:paxAdult/:paxChildren/:paxInfant/:goDate/:roundTrip/:returnDate',
        name: 'caritiketpesawat',
        component: CariTiketPesawat
    },
    {
        path: '/detail-tiket-pesawat/:id/:departId/:arrivalId/:paxAdult/:paxChildren/:paxInfant/:goDate/:roundTrip/:returnDate/:token',
        name: 'detailtiketpesawat',
        component: DetailTiketPesawat
    },
    {
        path: '/pemesanan-tiket-pesawat/:id/:flightId/:departId/:arrivalId/:paxAdult/:paxChildren/:paxInfant/:goDate/:roundTrip/:returnDate/:token',
        name: 'pemesanantiketpesawat',
        component: PemesananTiketPesawat
    },
    {
        path: '/cek-pemesanan-tiket-pesawat/:id/:flightId/:departId/:arrivalId/:paxAdult/:paxChildren/:paxInfant/:goDate/:roundTrip/:returnDate/:token/query',
        name: 'cekpemesanantiketpesawat',
        component: CekPemesananTiketPesawat
    },
    {
        path: '/pembayaran/:token',
        name: 'pembayaran',
        component: Pembayaran
    },

    // kereta api route
    {
        path : '/tiket-kereta-api',
        name : 'tiketkeretaapi',
        component : KeretaApi
    },

    // bus route
    {
        path : '/tiket-bus',
        name : 'tiketbus',
        component : Bus
    },

    // kapal route
    {
        path : '/tiket-kapal',
        name : 'tiketkapal',
        component : Kapal
    },

    // umroh route
    {
        path : '/umroh',
        name : 'umroh',
        component : Umroh
    },

    // haji route
    {
        path : '/haji',
        name : 'haji',
        component : Haji
    },

    // tour rote
    {
        path : '/tour',
        name : 'tour',
        component : Tour
    },
    {
        path : '/tour-domestik',
        name : 'tourdomestik',
        component : TourDomestik
    },
    {
        path : '/tour-international',
        name : 'tourinternational',
        component : TourInternational
    },

    // hotel route
    {
        path : '/hotel',
        name : 'hotel',
        component : Hotel
    },

    // penjemputan route
    {
        path : '/penjemputan',
        name : 'penjemputan',
        component : Penjemputan
    },

    // rental mobil route
    {
        path : '/rental-mobil',
        name : 'rentalmobil',
        component : RentalMobil
    },

    // kuliner route
    {
        path : '/kuliner',
        name : 'kuliner',
        component : Kuliner
    },

    // ecommerce route
    {
        path : '/toko',
        name : 'toko',
        component : Ecommerce
    },

    // pembayaran route
    {
        path: '/proses-pembayaran',
        name: 'prosespembayaran',
        component: ProsesPembayaran
    },
    {
        path: '/sukses',
        name: 'sukses',
        component: Sukses
    },

    // route
    {
        path : '/blog',
        name : 'blog',
        component : Blog
    },
    {
        path : '/karir',
        name : 'karir',
        component : Karir
    },
    {
        path : '/partner',
        name : 'partner',
        component : Partner
    },
    {
        path: '/how-to-book',
        name: 'howtobook',
        component: HowtoBook
    },
    {
        path: '/syarat-Ketentuan',
        name: 'syaratketentuan',
        component: SyaratKetentuan
    },
    {
        path: '/kebijakan-privasi',
        name: 'kebijakanprivasi',
        component: KebijakanPrivasi
    },
    {
        path : '/frequently-ask-question',
        name : 'faq',
        component : Faq
    },
    {
        path : '/promo',
        name : 'promo',
        component : Promo
    },
    {
        path : '/detail-promo',
        name : 'detailpromo',
        component : DetailPromo
    },
]
