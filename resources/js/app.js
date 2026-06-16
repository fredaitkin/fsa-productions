import { createApp, h } from 'vue';
import GitHubPage from './pages/GitHubPage.vue';
import HomePage from './pages/HomePage.vue';
import ServicesPage from './pages/ServicesPage.vue';
import VideosPage from './pages/VideosPage.vue';

const app = document.querySelector('#app');
const pageKey = app?.dataset.page ?? 'home';

const pages = {
    home: HomePage,
    services: ServicesPage,
    github: GitHubPage,
    videos: VideosPage,
};

const CurrentPage = pages[pageKey] ?? HomePage;

createApp({
    render() {
        return h(CurrentPage);
    },
}).mount('#app');
