<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \DB::table('contents')->insert([
            'id' => 1,
            'html_content' => "
                <div class='bl-block bl-pad-t-60 bl-pad-b-60' style='background-color:transparent;'>
                    <div class='webteam03'>
                        <div class='container'>
                            <div class='col-12 col-lg-6 offset-lg-3'>
                                <div class='row'>
                                    <div class='bl-col col-12 align-top webteam03-imagewrapper'>
                                        <img class='bl-image webteam03-image' data-square-image='' data-src='https://cdn.nomad.systems/uploads/u/use/files/Templates/Blog/Blog01/person01.png' style='opacity:1;width:250px;height:250px;' src='https://cdn.nomad.systems/uploads/u/use/files/Templates/Blog/Blog01/person01.png'></div>
                                    <div class='bl-col col-12 bl-align_center'>
                                        <div class='bl-title bl-title-xxs webteam03-title mx-auto aos-init aos-animate' style='font-family:;' data-aos='flip-down'>George Atkins</div>
                                        <div class='bl-descr bl-upnote-lg webteam03-descr mx-auto aos-init aos-animate' style='font-family:;' data-aos='flip-down'>I am a professional photographer based out of Chicago, IL, specializing in lifestyle photograhy, landscapes and portraits.</div>
                                    </div>
                                </div>
                                <div class='row webteam03-buttonswrapper'>
                                    <div class='webteam03-buttons'>
                                        <a class='bl-button webteam03-button aos-init aos-animate' id='r7-bl-element-3' style='font-family:;color:#ffffff;background-color:rgba(94, 113, 145, 1);font-weight:;border-radius:8px;-moz-border-radius:8px;-webkit-border-radius:8px;' data-aos='flip-down' href='http://websheet.cc/' target='_blank'>Facebook</a>
                                        <a class='bl-button webteam03-button2 aos-init aos-animate' id='r7-bl-element-4' style='color:#ffffff;background-color:rgba(94, 113, 145, 1);font-weight:;border-radius:8px;-moz-border-radius:8px;-webkit-border-radius:8px;' data-aos='flip-down' href='http://websheet.cc/' target='_blank'>Instagram</a>
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </div>
                    <style>#r7-bl-element-3:hover {color:#ffffff !important;background-color:rgba(93, 112, 145, 0.79) !important;}</style><style>#r7-bl-element-4:hover {color:rgb(255, 255, 255) !important;background-color:rgba(93, 112, 145, 0.79) !important;}</style>
                </div>
            ",
        ]);

        \DB::table('contents')->insert([
            'id' => 2,
            'html_content' => "
                <div class='bl-block bl-pad-t-90 bl-pad-b-90' style=''>
                    <div class='weblist25'>
                        <div class='container'>
                            <div class='row'>
                                <div class='bl-title bl-title-xxs weblist25-title col-12' style=''>Most Visited</div>
                                <div class='bl-descr bl-descr-xl weblist25-descr col-12' style=''>Check out our newest tours.</div>
                            </div>
                            <div class='col-12'>
                                <div class='row weblist25-filter bl-listitemsfilter aos-init aos-animate' data-aos='fade-left' data-filter-target='r8-bl-element-listitems'>
                                    
                                <div class='weblist25-category bl-item active' style='color:#000000;background-color:#ffffff;'>
                                        <span class='bl-text-lg'>All</span>
                                    </div><div class='weblist25-category bl-item' style='color:#000000;background-color:#ffffff;'>
                                        <span class='bl-text-lg'>Travel</span>
                                    </div><div class='weblist25-category bl-item' style='color:#000000;background-color:#ffffff;'>
                                        <span class='bl-text-lg'>City</span>
                                    </div></div>
                            </div>
                            <div class='row bl-listitems' id='r8-bl-element-listitems'>
                                
                            <div class='weblist25-item col-lg-6 col-md-6 bl-item aos-init aos-animate' data-aos='fade-left'>
                                    <div class='weblist25-iteminner' style='background-color:#ffffff;border-width:1px;border-color:#ffffff;'>
                                        <div class='weblist25-itemimagewrapper'>
                                            <div class='bl-imgitem weblist25-itemimage' data-src='https://cdn.nomad.systems/uploads/u/use/files/Blocks/Lists/05_B_valencia.jpg' style='height: 360px; background-image: url(&quot;https://cdn.nomad.systems/uploads/u/use/files/Blocks/Lists/05_B_valencia.jpg&quot;);'></div>
                                        </div>
                                        <div class='weblist25-itemcontent bl-align_left' data-same-height='' data-same-height-per-row='' style='height: 170px;'>
                                            <a class='bl-link weblist25-itemlink bl-item-link bl-underline-hover' href='http://BlogPage01'>
                                                <div class='bl-title weblist25-itemtitle bl-descr-xl' style=''>Party for our clients</div>
                                            </a>
                                            <div class='bl-time weblist25-itemtime bl-descr-xs' style=''>January, 09, 2021</div>
                                            <div class='bl-descr weblist25-itemdescr bl-upnote-lg' style=''>One of the biggest cities in Spain. It is located at the Mediterranean sea, and you will find beaches right in the very heart of it. This lovely city has many things to offer: breathtaking beaches, unique culture, street art, amazing architecture, wild festivals and much more.</div>
                                        </div>
                                    </div>
                                    <div class='weblist25-itemspacer' style='margin-bottom:30px;'></div>
                                </div><div class='weblist25-item col-lg-6 col-md-6 bl-item aos-init aos-animate' data-aos='fade-left'>
                                    <div class='weblist25-iteminner' style='background-color:#ffffff;border-width:1px;border-color:#ffffff;'>
                                        <div class='weblist25-itemimagewrapper'>
                                            <div class='bl-imgitem weblist25-itemimage' data-src='https://cdn.nomad.systems/uploads/u/use/files/Templates/Blog/Blog01/landscape06.png' style='height: 360px; background-image: url(&quot;https://cdn.nomad.systems/uploads/u/use/files/Templates/Blog/Blog01/landscape06.png&quot;);'></div>
                                        </div>
                                        <div class='weblist25-itemcontent bl-align_left' data-same-height='' data-same-height-per-row='' style='height: 170px;'>
                                            <a class='bl-link weblist25-itemlink bl-item-link bl-underline-hover' href='http://BlogPage02'>
                                                <div class='bl-title weblist25-itemtitle bl-descr-xl' style=''>A new version of our iOS app</div>
                                            </a>
                                            <div class='bl-time weblist25-itemtime bl-descr-xs' style=''>January, 01, 2021</div>
                                            <div class='bl-descr weblist25-itemdescr bl-upnote-lg' style=''>Athens are a popular destination for world travellers. It is home to some of the oldest standing structures in Europe. You will come across ancient ruins and taste phenomenal food like nowhere else.</div>
                                        </div>
                                    </div>
                                    <div class='weblist25-itemspacer' style='margin-bottom:30px;'></div>
                                </div></div>
                        </div>
                    </div>
                    <style>#r8 .bl-listitemsfilter > .bl-item.active, #r8 .bl-listitemsfilter > .bl-item:hover {color:#ffffff !important;background-color:#5e7191 !important;}</style><style>#r8 .bl-item-link[href]:hover, #r8 .bl-item-link[href]:hover * {color:#333333 !important;}</style>
                </div>
                <script>window.filter_targets=window.filter_targets||{}; window.filter_targets['r8-bl-element-listitems']={fs:[null,'travel','city'],items:[['travel','city'],['travel']]};</script>
            ",
        ]);

        \DB::table('contents')->insert([
            'id' => 3,
            'html_content' => "
                <div class='bl-block bl-pad-t-60 bl-pad-b-60' style='background-color:#ffffff;'>
                    <div class='webgall01'>
                        <div class='container'>            
                            <div class='row webgall01-imageswrapper'>
                                <div class='col-12 col-lg-12'>
                                    <div class='row bl-listitems'>
                                        
                                    <div class='col col-4 webgall01-image bl-item'>
                                            <div class='bl-image webgall01-imgitem' data-src='https://cdn.nomad.systems/uploads/u/use/files/Blocks/Gallery/01_A_bridge.jpg' data-fancybox='r5-gal' style='height: 540px; background-image: url(&quot;https://cdn.nomad.systems/uploads/u/use/files/Blocks/Gallery/01_A_bridge.jpg&quot;);'></div>
                                        </div><div class='col col-4 webgall01-image bl-item'>
                                            <div class='bl-image webgall01-imgitem' data-src='https://cdn.nomad.systems/uploads/u/use/files/Blocks/Gallery/01_B_architecture.jpg' data-fancybox='r5-gal' style='height: 540px; background-image: url(&quot;https://cdn.nomad.systems/uploads/u/use/files/Blocks/Gallery/01_B_architecture.jpg&quot;);'></div>
                                        </div><div class='col col-4 webgall01-image bl-item'>
                                            <div class='bl-image webgall01-imgitem' data-src='https://cdn.nomad.systems/uploads/u/use/files/Blocks/Gallery/01_C_cat.jpg' data-fancybox='r5-gal' style='height: 540px; background-image: url(&quot;https://cdn.nomad.systems/uploads/u/use/files/Blocks/Gallery/01_C_cat.jpg&quot;);'></div>
                                        </div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>            
            ",
        ]);
    }
}
