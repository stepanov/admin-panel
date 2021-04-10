import Home from './components/Home.vue';
import DisplayQuestionnare from './components/DisplayQuestionnare.vue';
import DisplayLogs from './components/DisplayLogs.vue';

export const routes = [
    {
        name: 'home',
        path: '/',
        component: Home
    },
    {
        name: 'uesrs',
        path: '/users',
        component: DisplayQuestionnare
    },
    {
        name: 'logs',
        path: '/logs',
        component: DisplayLogs
    }
];
