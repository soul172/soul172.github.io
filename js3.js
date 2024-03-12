import * as THREE from 'three';
import {OrbitControls} from "OrbitControls";
import {FBXLoader} from "FBXLoader";





//Сцена
const scene = new THREE.Scene();
//AxesHelper
// const axesHelper = new THREE.AxesHelper( 5 );

// scene.add( axesHelper );
const canvas = document.querySelector('.canvas2');


//Размеры канваса
const sizes = {
    width: 400,
    height: 500,
}

//Камера
const camera = new THREE.PerspectiveCamera(70, sizes.width / sizes.height, 0.1, 1000,);
camera.position.x = 0;
camera.position.y = 5;
camera.position.z = 25;
scene.add(camera);


//Свет
const light = new THREE.AmbientLight( 0xffffff , 1.5, 100 );
scene.add( light );


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
loader.load('models/calchan_normalgl.fbx', object => {
    scene.add(object);
    object.scale.set(.5,.5,.5)
    object.position.z = 0;
    object.position.x = 0;
    object.position.y = -20;
    // object.rotation.z = THREE.MathUtils.degToRad(-90);
    object.rotation.y = THREE.MathUtils.degToRad(-180);
    
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