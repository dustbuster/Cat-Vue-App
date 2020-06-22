import AllCats from './components/AllCats.vue';
import AddCat from './components/AddCat.vue';
import EditCat from './components/EditCat.vue';

export const routes = [
    {
        name: 'home',
        path: '/',
        component: AllCats
    },
    {
        name: 'add',
        path: '/add',
        component: AddCat
    },
    {
        name: 'edit',
        path: '/edit/:id',
        component: EditCat
    }
];