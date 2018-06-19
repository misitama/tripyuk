import Login from './components/auth/LoginComponent.vue';
import Dashboard from './components/dashboard/DashboardComponent.vue';
import Roles from './components/roles/RolesComponent.vue';
import RolesPageHeading from './components/roles/RolesPageHeadingComponent.vue';
import Users from './components/users/IndexUserComponent.vue';
import UsersPageHeading from './components/users/PageHeadingUserComponent.vue';
import IndexMasterBedType from './components/masterbedtype/index.vue';
import PageHeadingBedType from './components/masterbedtype/pageheading.vue';
import IndexAirlineBook from './components/airlines/index.vue';
import PageHeadingAirlineBook from './components/airlines/pageheading.vue';


export default [
    {
        path:'/',
        name:'loginf',
        component:Login
    },
    {
        path:'/login',
        name:'login',
        component:Login
    },
    {
        path:'/dashboard',
        name:'dashboard',
        component:Dashboard,
        meta:{
            auth:true
        }
    },
    {
        path:'/roles',
        name:'roles',
        components:{
            default:Roles,
            pageHeading:RolesPageHeading
        },
        meta:{
            auth:true
        }
    },
    {
        path:'/users',
        name:'users',
        component:Users,
        meta:{
            auth:true
        }
    },
    {
        path:'/bed-type',
        name:'masterBedType',
        components:{
            default:IndexMasterBedType,
            pageHeading:PageHeadingBedType
        },
        meta:{
            auth:true
        }
    },
    {
        path:'/airlines-book',
        name:'airlinesBook',
        meta:{
            auth:true
        },
        components:{
            default:IndexAirlineBook,
            pageHeading:PageHeadingAirlineBook,
        }
    },
]