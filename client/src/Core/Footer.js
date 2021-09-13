import React from 'react';
import {Link, withRouter} from 'react-router-dom';


const footer = () =>(
    <div>
        
        <footer className="footer">
            <div className="footer_top">
            <div className="container">
                <div className="row">

                    <div className="col-xl-4  col-md-6 col-lg-4">
                        <div className="footer_widget">
                           <h3 className="footer_title"><i className="fa fa-map-marker before-icon"></i> New Haven Location</h3>
                           <p>142 Amity Rd, New Haven, CT 06515<br/>
                            Phone: 203.901.1003 ext. 1<br/>
                            Email: newhaven@safaristanspetcenter.com
                            </p>
                            <p>Monday 11:00 am - 6:00 pm<br/>
                                Tuesday - Saturdays 10:00 am - 7:00 pm</p>
                        </div>
                    </div> 
                    <div className="col-xl-4  col-md-6 col-lg-4">
                        <div className="footer_widget">
                            <h3 className="footer_title"><i className="fa fa-map-marker before-icon"></i> STAMFORD  Location</h3>
                            <p>633 Hope St., Stamford, CT 06907<br/>
                                Phone: 203.901.1003 ext. 2<br/>
                                Email: stamford@safaristanspetcenter.com   
                             </p>
                             <p>Monday 11:00 am - 6:00 pm
                                Tuesday - Saturdays 10:00 am - 7:00 pm</p>
                         </div>
                    </div>
                    <div className="col-xl-1"></div>
                    <div className="col-xl-3 col-md-6 col-lg-4 ">
                        <div className="footer_widget">
                            <h3 className="footer_title">
                                AVAILABLE PUPPIES
                            </h3>  
                            <ul className="links">
                                <li><Link to="/puppies-for-sale">View All Puppies</Link></li>
                                {/* <li><Link to="/#">New Haven Puppies</Link></li>
                                <li><Link to="/#">Stamford Puppies</Link></li>  */}
                                <li><a target='_blank' href="https://shop.safaristanspetcenter.com/">Shop Pet Supplies</a></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div className="copy-right_text">
            <div className="container"> 
                <div className="row text-center">
                    <div className="col-xl-8">
                        <p className="copy_right text-lg-left">
                            Copyright 2013-2020  Safari Stan’s Pet Center | All Rights Reserved
                        </p>
                    </div>
                    <div className="col-xl-4">
                        <div className="social_media_links text-lg-right">
                            <a target='_blank' href="https://www.facebook.com/SafariStansPets">
                                <i className="fa fa-facebook"></i>
                            </a>
                            <a target='_blank' href="https://twitter.com/SafariStansNH">
                                <i className="fa fa-twitter"></i>
                            </a>
                            <a target='_blank' href="https://www.youtube.com/channel/UC6wIirupjbHfkKn6jLlfwYg">
                                <i className="fa fa-youtube-play"></i>
                            </a>
                            <a target='_blank' href="https://www.instagram.com/safaristansnewhaven/">
                                <i className="fa fa-instagram"></i>
                            </a>
                            <a href="#">
                                <i className="fa fa-envelope"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </footer>
    </div>
);

export default withRouter(footer);