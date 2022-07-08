import React, {useState, useEffect}  from 'react';
import {IMG} from "../config";
import {Helmet} from "react-helmet";
import Menu from './Menu';
import Footer from './Footer';
import {getAboutPage} from "./apiCore";

const About = () => {

    const [getAboutContent, setAllAboutContent] = useState([]);

    const loadAllAboutContent = () => {
        getAboutPage().then(data => {
              if(data.error){
                  console.log(data.error)
              } else{
                setAllAboutContent(data)
                //console.log(data.data)
              }
          });
      };
  
      useEffect(() =>{
        loadAllAboutContent();
      }, [])

    return(
        <div>
            <Helmet>
                <meta charSet="utf-8" />
                <title>About - Safari Pet Center</title>
            </Helmet>
            <Menu/>
            {/* {JSON.stringify(getAboutContent)} */}

            {getAboutContent.map((p, i) => ( 

                <div>
                    <Helmet>
                        <title>{p.title}</title>
                    </Helmet>

                    <div className="slider_area">
                        <div className="single_slider about_bg_1 d-flex align-items-center" style={{background: `url(${IMG+p.banner})`}}>
                            <div className="container">
                                <div className="row">
                                    <div className="col-12">
                                        <div className="slider_text">
                                        
                                            <h3>{p.banner_text}</h3>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                    dangerouslySetInnerHTML={{
                        __html: p.description
                    }}></div>
                </div>

            ))}  
            
            <Footer/>
        </div>        
    )
}


export default About;