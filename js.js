import * as THREE from 'three';
import {OrbitControls} from "OrbitControls";
import {FBXLoader} from "FBXLoader";





//Сцена
const scene = new THREE.Scene();
//AxesHelper

const canvas = document.querySelector('.canvas');

//Размеры канваса
const sizes = {
    width: 500,
    height: 400,
}


//Камера
const camera = new THREE.PerspectiveCamera(70, sizes.width / sizes.height, 0.1, 1000,);
camera.position.x = 0;
camera.position.y = 2;
camera.position.z = 5;
scene.add(camera);

//Свет
const light = new THREE.AmbientLight( 0xffffff , 3, 100 );
scene.add( light );


//Рендер
const renderer = new THREE.WebGLRenderer({canvas, alpha: true});
renderer.setClearColor( 0x000000, 0 )
renderer.setSize(sizes.width, sizes.height);

//ОрбитКонтрол
const controls = new OrbitControls(camera, canvas);
//controls.autoRotate = true;
//controls.autoRotateSpeed = 0.1;
controls.target.set(0, 1, 0)
controls.enableDamping = true;

//FBX Loader
const loader = new FBXLoader();
loader.load('models/ch_high.fbx', object => {
    scene.add(object);
    object.position.z = 0;
    object.position.x = 0;
    object.position.y = -1.4;
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