import React, { Component } from 'react';
import Slider from "react-slick";
import ProfileCard from './ProfileCard';

const settings = {
    dots: true,
    swipeToSlide: true,
    focusOnSelect: true,
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    speed: 500,
    arrows: false,
    responsive: [
        {
            breakpoint: 1360,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                dots: true
            }
        },
        {
            breakpoint: 580,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true
            }
        }
    ]
};

class SimpleSlider extends Component {


    render() {

        const {profils} = this.props;
        const allProfils = profils.map((el, i) => <div key={el+i}>
            <ProfileCard user={el} {...this.props}/>
        </div> )

        return (
            <Slider {...settings}>
                
                {allProfils}

            </Slider>
        );
    }
}

export default SimpleSlider;