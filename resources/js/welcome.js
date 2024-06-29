import "@splidejs/splide/dist/css/splide.min.css";
import Splide from "@splidejs/splide";
import * as THREE from "three";
import { FBXLoader } from "three/examples/jsm/loaders/FBXLoader.js";

const scene = new THREE.Scene();
const camera = new THREE.PerspectiveCamera(75, 1, 0.1, 1000);
camera.position.set(0, 0, 10);

const canvasElement = document.getElementById("canvas");
const renderer = new THREE.WebGLRenderer({
    canvas: canvasElement,
    antialias: true,
    alpha: true,
});
renderer.outputEncoding = THREE.sRGBEncoding;
renderer.toneMapping = THREE.ACESFilmicToneMapping;
renderer.toneMappingExposure = 2;
renderer.setPixelRatio(window.devicePixelRatio);

const canvas = renderer.domElement;
canvas.setAttribute("tabindex", "0");
canvas.style.outline = "none";

scene.add(new THREE.AmbientLight(0xffffff, 0.8));

let mixer;
new FBXLoader().load("/three/welcome_scene/models/Dragon_WoWc.fbx", (object) => {
    object.scale.set(0.02, 0.02, 0.02);
    object.position.set(0, -4, 0);
    mixer = new THREE.AnimationMixer(object);
    mixer.clipAction(object.animations[0]).play();
    scene.add(object);
});

let mouseX = 0, mouseY = 0;
document.addEventListener("mousemove", (e) => {
    mouseX = (e.clientX - window.innerWidth / 2) / 100;
    mouseY = (e.clientY - window.innerHeight / 2) / 100;
});

const clock = new THREE.Clock();
function animate() {
    requestAnimationFrame(animate);
    if (mixer) mixer.update(clock.getDelta());
    camera.position.x += (-mouseX - camera.position.x) * 0.05;
    camera.position.y += (mouseY - camera.position.y) * 0.05;
    camera.lookAt(scene.position);
    renderer.render(scene, camera);
}
animate();

function resizeRenderer() {
    const size = Math.min(window.innerWidth, window.innerHeight);
    renderer.setSize(size, size);
    camera.aspect = 1;
    camera.updateProjectionMatrix();
}
window.addEventListener("resize", resizeRenderer);
resizeRenderer(); // Llamar inicialmente para establecer el tamaño

document.addEventListener("DOMContentLoaded", () => {
    new Splide(".splide", { type: "loop", autoplay: true }).mount();
});