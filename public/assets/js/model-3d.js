import * as THREE from "https://cdn.skypack.dev/three@0.129.0/build/three.module.js";

import { GLTFLoader } from "https://cdn.skypack.dev/three@0.129.0/examples/jsm/loaders/GLTFLoader.js";

let object;

const scene = new THREE.Scene();
const camera = new THREE.PerspectiveCamera( 75, window.innerWidth / window.innerHeight, 0.1, 1000 );

const renderer = new THREE.WebGLRenderer({alpha : true});
renderer.setSize( window.innerWidth / 2, window.innerHeight);
document.getElementById("container3D").appendChild( renderer.domElement );

const loader = new GLTFLoader();

loader.load(
    `../../upload/3d/MagicMirrorglb.glb`,
    function(gltf){
        object = gltf.scene;
        scene.add(object);
    },
    function(xhr){
        console.log((xhr.loaded / xhr.total * 100) + '% loaded');
    },
    function(error){
        console.error(error)
    }
);

camera.position.z = 5.5;

function animate() {
	requestAnimationFrame( animate );

    if(object){
        object.rotation.x += 0.02;
        object.rotation.y += 0.02;
    }


	renderer.render( scene, camera );
}

animate();