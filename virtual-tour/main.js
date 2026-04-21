const panoramaImage = new PANOLENS.ImagePanorama("images/alun_alun_bersejarah_dengan_bangunan_kolonial.png");
const imageContainer = document.querySelector(".image-container");

const viewer = new PANOLENS.Viewer({
  container: imageContainer,
  autoRotate: true,
  autoRotateSpeed: 0.3,
  controlBar: false,
});

viewer.add(panoramaImage);
