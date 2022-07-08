import React, {useState, useEffect}  from 'react';
import { Helmet } from 'react-helmet';
import Menu from './Menu';
import Footer from './Footer';
import {getFinancingPage} from "./apiCore";

const Financing = () => {

    const [getFinancingContent, setAllFinancingContent] = useState([]);

    const loadAllFinancingContent = () => {
        getFinancingPage().then(data => {
              if(data.error){
                  console.log(data.error)
              } else{
                setAllFinancingContent(data)
                //console.log(data.data)
              }
          });
      };
  
      useEffect(() =>{
        loadAllFinancingContent();
      }, [])

    return(
        <div>
            <Helmet>
                <meta charSet="utf-8" />
                <title>Financing - Safari Pet Center</title>
            </Helmet>
            <Menu/>
            {/* {JSON.stringify(getFinancingContent)} */}

            {getFinancingContent.map((p, i) => ( 

                <div>
                    <div class="slider_area">
                        <div class="single_slider veterinarian_bg_1 d-flex align-items-center">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="slider_text">
                                            <h3>Financing
                                            <br></br><span>Get Approved Today</span>
                                            </h3>
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


export default Financing;