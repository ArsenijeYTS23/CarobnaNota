<template>
<div>
  <div class="site-blocks-cover overlay" style="background-image: url('car.png'); min-height:220px; height:220px;" data-aos="fade" data-stellar-background-ratio="0.5" >
  <!-- <div  style="background-image: url('car1.png'); height:220px; background-repeat: no-repeat; background-position: center;" data-aos="fade" data-stellar-background-ratio="0.5" > -->
    <!-- <div class="site-blocks-cover overlay" style="background-image: url('car.jpg');" data-aos="fade" data-stellar-background-ratio="0.5" data-aos="fade"> -->
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-md-7 text-center" data-aos="fade-up" data-aos-delay="400">
       <div id="playerContainer" style="display:none"></div>

          </div>
        </div>

      </div>

      <h1 style=" position:absolute; bottom:0px;

    left:50%; transform: translate(-50%); background:rgba(255, 255, 255, 0.61); color:#0088b0; border-radius:25px; font-size:200%;">Vesti</h1>
    </div>
    <!-- <br> -->
    <div class="site-section">

      <div class="container">

        <div class="row">
          <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto" data-aos="fade-up">
            <h2 class="mb-5">Vesti i najave</h2>
            <p>Najave koncerata i nastupa.. Vesti vezane za naše aktivnosti
            </p>
          </div>
        </div>

        <div class="site-block-retro d-block d-md-flex" v-for="pages in news_page">

          <a href="#" class="col1 unit-9 no-height" data-aos="fade-up" data-aos-delay="100">
            <div class="image" style="background-image: url('car.png');"></div>
            <div class="unit-9-content">
              <h2>{{pages[0].naziv}}</h2><br><h2 style="padding-top:0px;">{{pages[0].mesto}}</h2>
              <span>{{formateddate(pages[0].time)[0]}} {{formateddate(pages[0].time)[1]}} &mdash; {{pages[0].vreme}}</span>
            </div>
          </a>

          <div class="col2 ml-auto" v-if="typeof pages[1] !== 'undefined'">

            <a href="#" class="col2-row1 unit-9 no-height" data-aos="fade-up" data-aos-delay="200" >
              <div class="image" style="background-image: url('car.png');"></div>
              <div class="unit-9-content">
                <h2 >{{pages[1].naziv}}</h2>
                <br><h2 style="padding-top:0px;">{{pages[1].mesto}}</h2>

                <span>{{formateddate(pages[1].time)[0]}} {{formateddate(pages[1].time)[1]}} &mdash; {{pages[1].vreme}}</span>
              </div>
            </a>

            <a href="#" class="col2-row2 unit-9 no-height" data-aos="fade-up" data-aos-delay="300" v-if="typeof pages[2] !== 'undefined'">
              <div class="image" style="background-image: url('office.jpg');"></div>
              <div class="unit-9-content">
                <h2>{{pages[2].naziv}}</h2><br><h2 style="padding-top:0px;">{{pages[2].mesto}}</h2>
                <span>{{formateddate(pages[2].time)[0]}} {{formateddate(pages[2].time)[1]}} &mdash; {{pages[2].vreme}}</span>
              </div>
            </a>

          </div>

        </div>

      </div>
    </div>

</div>
</template>
<script>
    export default {
      data () {
          return {

              news_page: {},
          //    display:'block'
          }
      },
      metaInfo() {
        return{
     title: 'Vesti i najave -Carobna nota',
  //   titleTemplate: '%s - Home',

     meta: [
      { name: 'twitter:title', content: 'Vesti i najave -Carobna nota', vmid:'twitter:title'  },
      { name: 'twitter:description', content: 'Muzicka radionica, Hor, Skola', vmid:'twitter:description'  },
      { name: 'twitter:image', content: 'http://www.test.carobnanota.com/car.jpg', vmid:'twitter:image'  },

      {property:"og:type", content:"website", vmid:'og:type'},
      {property:"og:url", content:"http://www.carobnanota.com/#/news", vmid:'og:url'},
      {property:"og:image", content:"http://www.test.carobnanota.com/car.jpg", vmid:'og:image'},
      {property:"og:site_name", content:"Carobna Nota", vmid:'og:site_name'},
      {property:"og:description", content:"Muzicka radionica, Hor, Skola", vmid:'og:description'},
      {property:"og:title", content:"Vesti i najave -Carobna nota", vmid:'og:title'},
    ]

   }

   },
      created(){
      //  this.height=1000
      var self=this;
      axios.get('news')
      .then(response=>this.news_page=response.data)
      .then(function(response){
        self.testingmodel();
          console.log(self.news_page[2][0].br);
    });

  //  console.log(this.home_page);



     },
     methods:{
       testingmodel:function(){
         let ckeditor14 = document.createElement('script');    ckeditor14.setAttribute('src',"js/main.js");
         document.head.appendChild(ckeditor14);
       },
       formateddate:function(d){
     let arr = d.split(/[- :]/);
     var months = new Array('Januar', 'Februar', 'Mart',
                     'April', 'Maj', 'Jun', 'Jul', 'Avgust',
                     'Septembar', 'Oktobar', 'Novembar', 'Decembar');
    // console.log(arr);
     let date = new Date(Date.UTC(arr[0], (arr[1]-1), arr[2]));

      return [date.getDate(), months[(date.getMonth())] ,date.getFullYear()]
    // return [date.getDate(), (date.getMonth())+1 ,date.getFullYear()]
     }
     },
      mounted() {
        let ckeditor1 = document.createElement('script');    ckeditor1.setAttribute('src',"js/jquery-3.3.1.min.js");
        document.head.appendChild(ckeditor1);

        let ckeditor2 = document.createElement('script');    ckeditor2.setAttribute('src',"js/jquery-migrate-3.0.1.min.js");
        document.head.appendChild(ckeditor2);

        let ckeditor3 = document.createElement('script');    ckeditor3.setAttribute('src',"js/jquery-ui.js");
        document.head.appendChild(ckeditor3);

        let ckeditor4 = document.createElement('script');    ckeditor4.setAttribute('src',"js/popper.min.js");
        document.head.appendChild(ckeditor4);

        let ckeditor5 = document.createElement('script');    ckeditor5.setAttribute('src',"js/bootstrap.min.js");
        document.head.appendChild(ckeditor5);

        let ckeditor6 = document.createElement('script');    ckeditor6.setAttribute('src',"js/owl.carousel.min.js");
        document.head.appendChild(ckeditor6);

        let ckeditor7 = document.createElement('script');    ckeditor7.setAttribute('src',"js/mediaelement-and-player.min.js");
        document.head.appendChild(ckeditor7);

        let ckeditor8 = document.createElement('script');    ckeditor8.setAttribute('src',"js/jquery.stellar.min.js");
        document.head.appendChild(ckeditor8);

        let ckeditor9 = document.createElement('script');    ckeditor9.setAttribute('src',"js/jquery.countdown.min.js");
        document.head.appendChild(ckeditor9);

        let ckeditor10 = document.createElement('script');    ckeditor10.setAttribute('src',"js/jquery.magnific-popup.min.js");
        document.head.appendChild(ckeditor10);

        let ckeditor11 = document.createElement('script');    ckeditor11.setAttribute('src',"js/bootstrap-datepicker.min.js");
        document.head.appendChild(ckeditor11);

        let ckeditor12 = document.createElement('script');    ckeditor12.setAttribute('src',"js/aos.js");
        document.head.appendChild(ckeditor12);

        let ckeditor13 = document.createElement('script');    ckeditor13.setAttribute('src',"js/circleaudioplayer.js");
        document.head.appendChild(ckeditor13);

        // let ckeditor14 = document.createElement('script');    ckeditor14.setAttribute('src',"js/main.js");
        // document.head.appendChild(ckeditor14);
}
    }
</script>
