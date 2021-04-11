import Home from './components/Home.vue';
import DisplayQuestionnare from './components/DisplayQuestionnare.vue';
import DisplayLogs from './components/DisplayLogs.vue';
import DisplayUser from './components/DisplayUser.vue';

export const routes = [
    {
        name: 'home',
        path: '/',
        component: Home
    },
    {
        name: 'users',
        path: '/users',
        component: DisplayQuestionnare
    },
    {
        name: 'logs',
        path: '/logs',
        component: DisplayLogs
    },
    {
        name: 'userView',
        path: '/users/view/:id',
        component: DisplayUser
    }
];
