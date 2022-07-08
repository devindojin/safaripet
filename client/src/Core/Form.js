import React  from 'react';
import {Link} from 'react-router-dom';


const Form = () => {
    return(
        <div>
            <div className="form-area">
                <div className="container">
                    <div className="row justify-content-center ">
                    <div className="col-md-12">
                        <div className="section_title text-center mb-5">
                            <h3>I am interested in the German Shepherd</h3>
                        </div>
                    </div>
                </div>
                    <div className="row justify-content-center">
                    <div className="col-lg-12">
                        <form className="form-contact comment_form" action="#" id="commentForm">
                            <div className="row">

                                <div className="col-sm-6">
                                    <div className="form-group">
                                        <input className="form-control" name="" id="" type="text"
                                            placeholder="First Name" />
                                    </div>
                                </div>
                                <div className="col-sm-6">
                                    <div className="form-group">
                                        <input className="form-control" name="" id="" type="text" placeholder="Last Name" />
                                    </div>
                                </div>
                                
                                <div className="col-sm-6">
                                    <div className="form-group">
                                        <input className="form-control" name="" id="" type="text"
                                            placeholder="Phone Number" />
                                    </div>
                                </div>
                                <div className="col-sm-6">
                                    <div className="form-group">
                                        <input className="form-control" name="email" id="email" type="email" placeholder="Email Address" />
                                    </div>
                                </div>
                                <div className="col-12">
                                    <div className="form-group">
                                        <textarea className="form-control w-100" name="comment" id="comment" cols="30" rows="9"
                                            placeholder="eg: I like this dog and tell me details"></textarea>
                                    </div>
                                </div>

                            </div>
                            <div className="form-group text-right">
                                <Link to="#"  className="boxed-btn3">Submit</Link>
                            </div>
                        </form>
                    </div>

                </div>
                </div>
            </div>
        </div>        
    )
}


export default Form;