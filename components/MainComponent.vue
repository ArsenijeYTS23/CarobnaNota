<template>
    <div>
    <app-menu></app-menu>
    <router-view></router-view>
    <app-footer></app-footer>
    <!-- <app-footer></app-footer> -->




    </div>
</template>

<script>





import Menu from './PageComponents/Menu';
import Home from './PageComponents/Home';
 import About from './PageComponents/About';
import Media from './PageComponents/Media';
 import Events from './PageComponents/Events';
 import News from './PageComponents/News';
 import Dogadjaj from './PageComponents/Dogadjaj';
 import Footer from './PageComponents/Footer';
// import Contact from './PageComponents/Contact';
    export default {
      components:{
        'app-menu':Menu,
        'app-home':Home,
         'app-about':About,
         'app-media':Media,
         'app-event':Events,
         'app-news':News,
         'app-dogadjaj':Dogadjaj,
         'app-footer':Footer,
        // 'app-contact':Contact

      },


    }
</script>
