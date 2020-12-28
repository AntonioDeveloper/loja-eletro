import React, { useState } from 'react';
import {
  Carousel,
  CarouselItem,
  CarouselControl,
  CarouselIndicators,
  CarouselCaption
} from 'reactstrap';



const Carrossel = (props) => {

  const {imagem1, imagem2, imagem3, imagem4} = props;

  console.log(imagem1);

  let items = [
    {
      src: `http://localhost:81/fullstackeletro/loja-eletro/src/imagens/${imagem1}`, 
      altText: 'Slide 1'
    },
    {
      src: `http://localhost:81/fullstackeletro/loja-eletro/src/imagens/${imagem2}`,
      altText: 'Slide 2'
    },
    {
      src: `http://localhost:81/fullstackeletro/loja-eletro/src/imagens/${imagem3}`,
      altText: 'Slide 3'
    },
    {
      src: `http://localhost:81/fullstackeletro/loja-eletro/src/imagens/${imagem4}`,
      altText: 'Slide 4'
    }
  ];
  console.log(items[0].src);
  const [activeIndex, setActiveIndex] = useState(0);
  const [animating, setAnimating] = useState(false);

  const next = () => {
    if (animating) return;
    const nextIndex = activeIndex === items.length - 1 ? 0 : activeIndex + 1;
    setActiveIndex(nextIndex);
  }

  const previous = () => {
    if (animating) return;
    const nextIndex = activeIndex === 0 ? items.length - 1 : activeIndex - 1;
    setActiveIndex(nextIndex);
  }

  const goToIndex = (newIndex) => {
    if (animating) return;
    setActiveIndex(newIndex);
  }

  const slides = items.map((item) => {
    return (
      <CarouselItem
        onExiting={() => setAnimating(true)}
        onExited={() => setAnimating(false)}
        key={item.src}
      >
        <img src={item.src} alt={item.altText} />
        <CarouselCaption captionText={item.caption} captionHeader={item.caption} />
      </CarouselItem>
    );
  });

  return (
    <Carousel
      activeIndex={activeIndex}
      next={next}
      previous={previous}
    >
      <CarouselIndicators items={items} activeIndex={activeIndex} onClickHandler={goToIndex} />
      {slides}
      <CarouselControl direction="prev" directionText="Previous" onClickHandler={previous} />
      <CarouselControl direction="next" directionText="Next" onClickHandler={next} />
    </Carousel>
  );
}

export default Carrossel;
