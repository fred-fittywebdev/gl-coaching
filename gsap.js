window.onload = function() {
  let tl = new TimelineMax();
  tl.from('.logo', 1, {
    x: '-250px',
    autoAlpha: 0,
    duration: 2.5,
    ease: 'power1.easeOut'
  })
    .to(
      '.item1',
      1,
      {
        opacity: 1
      },
      '-=0.4'
    )
    .to(
      '.item2',
      1,
      {
        opacity: 1
      },
      '-=0.6'
    )
    .to(
      '.item3',
      1,
      {
        opacity: 1
      },
      '-=0.7'
    )
    .from(
      '.button',
      1,
      {
        x: '-250px'
      },
      '-=0.8'
    );
};
