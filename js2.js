import * as THREE from 'three';
import {OrbitControls} from "OrbitControls";
import {FBXLoader} from "FBXLoader";




//Сцена
const scene = new THREE.Scene();
//AxesHelper

const canvas = document.querySelector('.canvas1');


//Размеры канваса
const sizes = {
    width: 400,
    height: 500,
}


//Камера
const camera = new THREE.PerspectiveCamera(70, sizes.width / sizes.height, 0.1, 1000,);
camera.position.x = 0;
camera.position.y = 2;
camera.position.z = 35;
scene.add(camera);


//Свет

const light = new THREE.PointLight( 0xffffff , 30, 500 );
light.position.set( 30, 40, 50 );
scene.add( light );
const light1 = new THREE.PointLight( 0xffffff , 30, 500 );
light1.position.set( -30, -40, -50 );
scene.add( light1 );
// const sphereSize = 1;
// const spherecolor = 0x000000;
// const pointLightHelper = new THREE.PointLightHelper( light, sphereSize, spherecolor );
// scene.add( pointLightHelper );

//Рендер
const renderer = new THREE.WebGLRenderer({canvas, alpha: true});
renderer.setSize(sizes.width, sizes.height);

//ОрбитКонтрол
const controls = new OrbitControls(camera, canvas);
//controls.autoRotate = true;
//controls.autoRotateSpeed = 0.1;
controls.target.set(0, 1, 0)
controls.enableDamping = true;

//FBX Loader
const loader = new FBXLoader();
loader.load('models/tabak2.fbx', object => {
    scene.add(object);
    object.position.z = 0;
    object.position.x = 0;
    object.position.y = 0;
});


window.addEventListener( 'resize', onWindowResize, false );

function onWindowResize(){

    camera.aspect = window.innerWidth / window.innerHeight;
    camera.updateProjectionMatrix();

    renderer.setSize( window.innerWidth, window.innerHeight );

}
onWindowResize();
canvas.addEventListener('dblclick', () => {
    if (document.fullscreenElement) {
        document.exitFullscreen();        
    }
    else {
        canvas.requestFullscreen();
    }
});

function animate() {
    requestAnimationFrame(animate);
    controls.update()
    renderer.render(scene, camera);

}

animate();