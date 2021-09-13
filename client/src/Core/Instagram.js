import React from 'react';


const Instagram = () => {

    return(
        <div>  
            <div className="instagram-section pt-5">
                <div className="container-fluid">
                    <div className="row justify-content-center">
                        <div className="col-lg-7 col-md-10">
                            <div className="section_title text-center">
                                <h3>Pet Stories</h3>
                                <h4>Follow us on Instagram @safaristansnh and @safaristanss</h4>
                            </div>
                        </div>
                    </div>

                    <div className="row justify-content-center">
                        <div className="col-lg-12 p-0">
                            <div className="insta-post-block">
                                <div className="instagram-post">
                                    <img src="/img/insta1.jpg"/>
                                </div>
                                <div className="instagram-post center">
                                    <img src="/img/insta2.jpg"/>
                                </div>
                                <div className="instagram-post">
                                    <img src="/img/insta3.jpg"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    );
    
};

export default Instagram;