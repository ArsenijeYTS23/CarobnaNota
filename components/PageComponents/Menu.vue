<template>
<div>
  <div class="site-wrap">

    <div class="site-navbar mt-4" style="position:fixed; top:-23px; margin:0px;
    background: rgba(52, 59, 150, 0.61); box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        <div class="container py-1">
          <div class="row align-items-center">
            <div class="col-8 col-md-8 col-lg-4">
              <h1 class="mb-0"><router-link to="/" exact><a class="text-white h2 mb-0" ><strong>Čarobna<span class="text-primary"></span>Nota</strong></a></router-link></h1>
            </div>
            <div class="col-4 col-md-4 col-lg-8" >
              <nav class="site-navigation text-right text-md-right" role="navigation" >

                <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

                <ul class="site-menu js-clone-nav d-none d-lg-block">
                  <li >
                    <router-link to="/" exact>Početna</router-link>
                  </li>
                  <li><router-link to="/about" exact>Kontakt -O nama</router-link></li>

                  <li><router-link to="/media" exact>Slike i snimci</router-link></li>
                  <li><router-link to="/news" exact>Vesti</router-link></li>
                  <li><router-link to="/events" exact>Putovanja i koncerti</router-link></li>

                </ul>
              </nav>
            </div>


          </div>
        </div>
      </div>
    </div>

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body" v-on:click="zatvori"></div>
    </div> <!-- .site-mobile-menu -->
</div>
</template>
<script>
    export default {
      methods:{
        zatvori:function(){

          setTimeout(function(){

             $('body').removeClass('offcanvas-menu');
          }, 700);

        //  alert('aa');



        }
      },
      mounted() {
        $('.js-clone-nav').each(function() {
    			var $this = $(this);
    			$this.clone().attr('class', 'site-nav-wrap').appendTo('.site-mobile-menu-body');
    		});

$('body').on('click', '.js-menu-toggle', function(e) {
  var $this = $(this);
  e.preventDefault();

  if ( $('body').hasClass('offcanvas-menu') ) {
    $('body').removeClass('offcanvas-menu');
    $this.removeClass('active');
  } else {
    $('body').addClass('offcanvas-menu');
    $this.addClass('active');
  }
})
// $('.site-mobile-menu').on('mouseup', 'li', function(e) {
//   var $this = $(this);
//   e.preventDefault();
//
//
//     $('body').removeClass('offcanvas-menu');
//
// })

}
    }
</script>
