import React  from 'react';
import {Link} from 'react-router-dom';

const Related = () => {
    return(
        <div className="similar-area mb-5">
            <div className="container">
                <div className="row justify-content-center ">
                    <div className="col-md-12">
                        <div className="section_title text-center mb-5">
                            <h3>Similar Pets Currently Available</h3>
                        </div>
                    </div>
                </div>
                <div className="row justify-content-center">
                    <div className="col-lg-12">
                    <div className="owl-carousel similar-slider">
                        <div className="listing-block">
                            <div className="listing-image">
                                <img src="img/listing.jpg" alt="safari"/>
                            </div>
                            <div className="listing-content"> 
                                <h3>Golden Retriver</h3>
                                <h4>Poodele, 4 Weeks</h4>
                                <Link to="/description" className="boxed-btn3">View Puppy</Link>
                            </div>
                        </div>
                        <div className="listing-block">
                            <div className="listing-image">
                                <img src="img/listing.jpg" alt="safari"/>
                            </div>
                            <div className="listing-content"> 
                                <h3>Golden Retriver</h3>
                                <h4>Poodele, 4 Weeks</h4>
                                <Link to="/description" className="boxed-btn3">View Puppy</Link>
                            </div>
                        </div>
                        <div className="listing-block">
                            <div className="listing-image">
                                <img src="img/listing.jpg" alt="safari"/>
                            </div>
                            <div className="listing-content"> 
                                <h3>Golden Retriver</h3>
                                <h4>Poodele, 4 Weeks</h4>
                                <Link to="/description" className="boxed-btn3">View Puppy</Link>
                            </div>
                        </div>
                        <div className="listing-block">
                            <div className="listing-image">
                                <img src="img/listing.jpg" alt="safari"/>
                            </div>
                            <div className="listing-content"> 
                                <h3>Golden Retriver</h3>
                                <h4>Poodele, 4 Weeks</h4>
                                <Link to="/description" className="boxed-btn3">View Puppy</Link>
                            </div>
                        </div>
                        <div className="listing-block">
                            <div className="listing-image">
                                <img src="img/listing.jpg" alt="safari"/>
                            </div>
                            <div className="listing-content"> 
                                <h3>Golden Retriver</h3>
                                <h4>Poodele, 4 Weeks</h4>
                                <Link to="/description" className="boxed-btn3">View Puppy</Link>
                            </div>
                        </div>
                        <div className="listing-block">
                            <div className="listing-image">
                                <img src="img/listing.jpg" alt="safari"/>
                            </div>
                            <div className="listing-content"> 
                                <h3>Golden Retriver</h3>
                                <h4>Poodele, 4 Weeks</h4>
                                <Link to="/description" className="boxed-btn3">View Puppy</Link>
                            </div>
                        </div>
                        <div className="listing-block">
                            <div className="listing-image">
                                <img src="img/listing.jpg" alt="safari"/>
                            </div>
                            <div className="listing-content"> 
                                <h3>Golden Retriver</h3>
                                <h4>Poodele, 4 Weeks</h4>
                                <Link to="/description" className="boxed-btn3">View Puppy</Link>
                            </div>
                        </div>
                        <div className="listing-block">
                            <div className="listing-image">
                                <img src="img/listing.jpg" alt="safari"/>
                            </div>
                            <div className="listing-content"> 
                                <h3>Golden Retriver</h3>
                                <h4>Poodele, 4 Weeks</h4>
                                <Link to="/description" className="boxed-btn3">View Puppy</Link>
                            </div>
                        </div>
                    </div>
                    </div>

                </div>
            </div>
        </div>
    );
};

export default Related;
