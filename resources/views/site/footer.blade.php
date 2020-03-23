<!--Footer-->
<footer class="footer_wrapper" id="contact">
        <div class="container">
            <section class="page_section contact" id="contact">
                <div class="contact_section">
                    <h2>{!! $pages[4]->name !!}</h2>
                   
                    <div class="row">
                        <div class="col-lg-4">

                        </div>
                        <div class="col-lg-4">

                        </div>
                        <div class="col-lg-4">

                        </div>
                    </div>
                </div>
                <div class="row">
                    
                    <div class="col-lg-4 wow fadeInLeft text-light">
                        <div class="contact_info">
                            <div class="detail">
                                <h4 class="text-light">Адрес</h4>
                                <p class="text-light">{{ $contact[0]->adress }}</p>
                            </div>
                            <div class="detail">
                                <h4>Телефон</h4>
                                <p>{{ $contact[0]->phone}}</p>
                            </div>
                            <div class="detail">
                                <h4>E-mail</h4>
                                <p>{{ $contact[0]->email}}</p>
                            </div>
                        </div>



                        <ul class="social_links">
                            <li class="twitter animated bounceIn wow delay-02s"><a href="javascript:void(0)"><i
                                        class="fa fa-twitter"></i></a></li>
                            <li class="facebook animated bounceIn wow delay-03s"><a href="javascript:void(0)"><i
                                        class="fa fa-facebook"></i></a></li>
                            <li class="pinterest animated bounceIn wow delay-04s"><a href="javascript:void(0)"><i
                                        class="fa fa-pinterest"></i></a></li>
                            <li class="gplus animated bounceIn wow delay-05s"><a href="javascript:void(0)"><i
                                        class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-8 wow fadeInLeft delay-06s">
                        <div class="form">
                            <form action="/" method="post"> 
                                @csrf
                            <input class="input-text" type="text" name="name"   value = "{{ old('name') }}" placeholder="Ваше Имя *"
                                onFocus="if(this.value==this.defaultValue)this.value='';"
                                onBlur="if(this.value=='')this.value=this.defaultValue;">
                            <input class="input-text" type="text" name="email" value = "{{ old('email') }}" placeholder="Ваш E-mail *"
                                onFocus="if(this.value==this.defaultValue)this.value='';"
                                onBlur="if(this.value=='')this.value=this.defaultValue;">
                            <textarea   placeholder="Ваше сообщение *" name='text' class="input-text text-area" cols="0" rows="0"
                                onFocus="if(this.value==this.defaultValue)this.value='';"
                                onBlur="if(this.value=='')this.value=this.defaultValue;">{{ old('text') }}</textarea>
                            <button class="btn input-btn" type="submit">Отправить сообщение</button>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="container">
            <div class="footer_bottom"><span>Copyright © 2020 stock-up.by, site by <a
                        href="№">Yakubouski A.</a> </span> </div>
        </div>
    </footer>

    <!--/Footer-->