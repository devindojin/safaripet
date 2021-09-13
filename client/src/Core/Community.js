import React, {useState, useEffect}  from 'react';
import Helmet from 'react-helmet';
import {IMG} from '../config';
import Menu from './Menu';
import Footer from './Footer';
import {getCommunityPage} from "./apiCore";

const Community = () => {

    const [getCommunityContent, setAllCommunityContent] = useState([]);

    const loadAllCommunityContent = () => {
        getCommunityPage().then(data => {
              if(data.error){
                  console.log(data.error)
              } else{
                setAllCommunityContent(data)
                //console.log(data.data)
              }
          });
      };
  
      useEffect(() =>{
        loadAllCommunityContent();
      }, [])

    return(
        <div>
            <Helmet>
                <meta charSet="utf-8" />
                <title>Community - Safari Pet Center</title>
            </Helmet>
            <Menu/>
            {/* {JSON.stringify(getCommunityContent)} */}

            {getCommunityContent.map((p, i) => ( 

                <div>
                    <div className="slider_area">
                        <div className="single_slider Community_bg_1 d-flex align-items-center" style={{background: `url(${IMG+p.banner})`}}>
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


export default Community;