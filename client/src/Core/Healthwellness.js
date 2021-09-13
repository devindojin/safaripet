import React, {useState, useEffect}  from 'react';
import {Helmet} from 'react-helmet';
import {IMG} from '../config';
import Menu from './Menu';
import Footer from './Footer';
import {getHealthwellnessPage} from "./apiCore";

const Healthwellness = () => {

    const [getHealthwellnessContent, setAllHealthwellnessContent] = useState([]);

    const loadAllHealthwellnessContent = () => {
        getHealthwellnessPage().then(data => {
              if(data.error){
                  console.log(data.error)
              } else{
                setAllHealthwellnessContent(data)
                //console.log(data.data)
              }
          });
      };
  
      useEffect(() =>{
        loadAllHealthwellnessContent();
      }, [])

    return(
        <div>
            <Helmet>
                <meta charSet="utf-8" />
                <title>Healthwellness - Safari Pet Center</title>
            </Helmet>
            <Menu/>
            {/* {JSON.stringify(getHealthwellnessContent)} */}

            {getHealthwellnessContent.map((p, i) => ( 

                <div>
                    <div className="slider_area">
                        <div className="single_slider Healthwellness_bg_1 d-flex align-items-center" style={{background: `url(${IMG+p.banner})`}}>
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


export default Healthwellness;