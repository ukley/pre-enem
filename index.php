<?php get_header();?>

<body>
    <div id="app">
            <div class="wrapper">
        
                    <div class="sidebar" data-image="assets/img/sidebar-5.jpg" >
                           
                    <div class="sidebar-wrapper" style="background:#094257">
                                    <div class="logo">
                                        <a href="#" class="simple-text logo-mini">
                                            CA
                                        </a>
                                        <a href="#" class="simple-text logo-normal">
                                            Colégio Classe A
                                        </a>
                                    </div>                           
                                               
                                    
                                
                                <ul class="nav" v-for="r in categorias" :key="r.id">                                       
                                        <li class="nav-item ">
                                                <a class="nav-link"  v-on:click.prevent=post(29)>
                                                        <i class=" nc-icon nc-cloud-download-93"></i>
                                                <p>Professora Adriana</p>
                                            </a>
                                        </li>
                    
                    
                                        <li class="nav-item ">
                                                <a class="nav-link"  v-on:click.prevent=post(38)>
                                                        <i class=" nc-icon nc-cloud-download-93"></i>
                                                <p>Professora Aline</p>
                                            </a>
                                        </li>   
                                        
                                        <li class="nav-item ">
                                                <a class="nav-link"  v-on:click.prevent=post(13)>
                                                        <i class=" nc-icon nc-cloud-download-93"></i>
                                                <p>Professor Cláudio</p>
                                            </a>
                                        </li>   

                                           <li class="nav-item ">
                                                <a class="nav-link"  v-on:click.prevent=post(50)>
                                                        <i class=" nc-icon nc-cloud-download-93"></i>
                                                <p>Professor Edson</p>
                                            </a>
                                        </li>   

                                          <li class="nav-item ">
                                                <a class="nav-link"  v-on:click.prevent=post(15)>
                                                        <i class=" nc-icon nc-cloud-download-93"></i>
                                                <p>Professor Flávio</p>
                                            </a>
                                        </li> 



                                            <li class="nav-item ">
                                                <a class="nav-link"  v-on:click.prevent=post(52)>
                                                        <i class=" nc-icon nc-cloud-download-93"></i>
                                                <p>Professor Giovani</p>
                                            </a>
                                        </li>
                                        
                                        
                                      
                                        
                                          
                                        <li class="nav-item ">
                                                <a class="nav-link"  v-on:click.prevent=post(17)>
                                                        <i class=" nc-icon nc-cloud-download-93"></i>
                                                <p>Professor Hermano</p>
                                            </a>
                                        </li>   

                                        <li class="nav-item ">
                                                <a class="nav-link"  v-on:click.prevent=post(19)>
                                                        <i class=" nc-icon nc-cloud-download-93"></i>
                                                <p>Professor Hiago</p>
                                            </a>
                                        </li>   

                                        <li class="nav-item ">
                                                <a class="nav-link"  v-on:click.prevent=post(24)>
                                                        <i class=" nc-icon nc-cloud-download-93"></i>
                                                <p>Professor Kléber</p>
                                            </a>
                                        </li> 

                                             <li class="nav-item ">
                                                <a class="nav-link"  v-on:click.prevent=post(87)>
                                                        <i class=" nc-icon nc-cloud-download-93"></i>
                                                <p>Professor Kléber - História</p>
                                            </a>
                                        </li> 

                                        <li class="nav-item ">
                                                <a class="nav-link"  v-on:click.prevent=post(11)>
                                                        <i class=" nc-icon nc-cloud-download-93"></i>
                                                <p>Professor Ney</p>
                                            </a>
                                        </li>

                                         <li class="nav-item ">
                                                <a class="nav-link"  v-on:click.prevent=post(86)>
                                                        <i class=" nc-icon nc-cloud-download-93"></i>
                                                <p>Professora Raquel</p>
                                            </a>
                                        </li>


                                        <li class="nav-item ">
                                                <a class="nav-link"  v-on:click.prevent=post(26)>
                                                        <i class=" nc-icon nc-cloud-download-93"></i>
                                                <p>Professor Rodrigues</p>
                                            </a>
                                        </li>

                                          <li class="nav-item ">
                                                <a class="nav-link"  v-on:click.prevent=post(54)>
                                                        <i class=" nc-icon nc-cloud-download-93"></i>
                                                <p>Professor Rochester</p>
                                            </a>
                                          </li>

                                          <li class="nav-item ">
                                                <a class="nav-link"  v-on:click.prevent=post(57)>
                                                        <i class=" nc-icon nc-cloud-download-93"></i>
                                                <p>Professor Tadeu</p>
                                            </a>
                                        </li>

                                        <li class="nav-item ">
                                                <a class="nav-link"  v-on:click.prevent=post(40)>
                                                        <i class=" nc-icon nc-cloud-download-93"></i>
                                                <p>Professora Verônica</p>
                                            </a>
                                        </li>

                                        <li class="nav-item ">
                                                <a class="nav-link"  v-on:click.prevent=post(42)>
                                                        <i class=" nc-icon nc-cloud-download-93"></i>
                                                <p>Professsor Wendel</p>
                                            </a>
                                        </li>
                                             
                                                                                                     
                                                                                                             
                                       
                                                     
                                    </ul>
                                </div>
                              <!--Fim do menu-->
                            </div>
                    
                    
                            <div class="main-panel">
                                <!-- Navbar -->
                                <nav class="navbar navbar-expand-lg " color-on-scroll="500" >
                                    <div class="container-fluid">
                                        <a class="navbar-brand" href="#pablo"> Materiais - Pré-Enem </a>

                                        <button  type="button"  class="navbar-toggler navbar-toggler-right ml-auto hidden-sm-up "
                                         data-target=".navbar-collapse" data-toggle="collapse" aria-controls="navbar-collapse"
                                          aria-expanded="false" aria-label="Alteracao Navegacao ">
                                            <span class="navbar-toggler-bar burger-lines"></span>
                                            <span class="navbar-toggler-bar burger-lines"></span>
                                            <span class="navbar-toggler-bar burger-lines"></span>
                                            <button class="btn btn-primary btn-sm">Opções</button>
                                        </button>   

                                    </div>
                                </nav>



                                <!-- End Navbar -->
                                <div class="content">
                                    <div class="container-fluid">          
                                    <div class="card" v-for="p in posts" :key="p.id">
                                        <div class="card-header">
                                            <h4 class="card-title">{{p.title.rendered}}</h4>
                                            <p class="card-category">Acesse o material e faça o Download</p>
                                        </div>
                                        <div class="card-body">
                                            <p v-html="p.content.rendered"></p>
                                        </div>
                                    </div>
                                        <div class="row">
                                           
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                                
                                <footer class="footer">
                                    <div class="container-fluid">
                                        <nav>
                                            <ul class="footer-menu">
                                                <li>
                                                    <a href="#">
                                                        Home
                                                    </a>
                                                </li>
                                                
                                            </ul>
                                        
                                        </nav>
                                    </div>
                                </footer>
                            </div>
                    </div>
                    

    </div>
            <script>
                
                let app=new Vue({
                    el:'#app',                    
                    data:{                       
                        categorias:[],
                        posts:[]
                    },                 

                    methods:{
                        start(){
                            fetch('https://colegioclassea.com.br/pre-enem/wp-json/wp/v2/categories')
                                .then((r)=>{
                                    r.json().then((cat)=>{
                                        this.categorias.push(cat)                                                    
                                            });
                                        });                          
                                                                                        
                              },

                              closeMenu(){    
                                $('.navbar-collapse a').click(function(){
            $(".navbar-collapse").collapse('hide');
        });

                               
                            },

                            post(id){
                               
                               if(this.posts.length > 0){
                                 this.posts.pop();
                               }
                               fetch('https://colegioclassea.com.br/pre-enem/wp-json/wp/v2/posts/'+id)
                                    .then((r)=>{
                                        r.json().then((v)=>{
                                                    this.posts.push(v)                                                      
                                                });
                                            });      
                                            this.closeMenu()                    
                                        }                                                    
                                },

                            mounted(){
                                this.start()
                            }              
                        });
            </script> 

</body>
<!--   Core JS Files   -->

<?php get_footer();?>