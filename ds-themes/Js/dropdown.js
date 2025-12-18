console.log('dropdown.js loaded');
let container=document.getElementById('container');
let imgs_containers=document.getElementsByClassName('img_container');
let imgs_count=imgs_containers.length;
let current_img_index=0;
let autoscroll_enabled=false;
let autoscroll_interval=3000;
let autoscroll_dir=1;

function setup(){
    let container_width=container.clientWidth
    for(let i=0;i<imgs_count;i++){
        let element=imgs_containers[i];
        let new_left_pos=container_width*i;
        element.style.left=new_left_pos+'px';
    }
}

function onleftbutton(){
    if(current_img_index>0){
        let container_width=container.clientWidth;
        current_img_index--;
        for(let i=0;i<imgs_count;i++){
            let element=imgs_containers[i];
            let new_left_pos=container_width*(i-current_img_index);
            element.style.left=new_left_pos+'px';
        }
    }
}

function onrightbutton(){
    if(current_img_index<imgs_count-1){
        let container_width=container.clientWidth;
        current_img_index++;
        for(let i=0;i<imgs_count;i++){
            let element=imgs_containers[i];
            let new_left_pos=container_width*(i-current_img_index);
            element.style.left=new_left_pos+'px';
        }
    }
}

function autoscroll(){
    if(autoscroll_enabled)return;
    if(current_img_index==0)autoscroll_dir=1;
    else if(current_img_index==imgs_count-1)autoscroll_dir=-1;

    if(autoscroll_dir>0){
        let container_width=container.clientWidth;
        current_img_index--;
        for(let i=0;i<imgs_count;i++){
            let element=imgs_containers[i];
            let new_left_pos=container_width*(i-current_img_index);
            element.style.left=new_left_pos+'px';
        }
    }else{
        let container_width=container.clientWidth;
        current_img_index++;
        for(let i=0;i<imgs_count;i++){
            let element=imgs_containers[i];
            let new_left_pos=container_width*(i-current_img_index);
            element.style.left=new_left_pos+'px';
        }
    }
}
setup();
setInterval(autoscroll,autoscroll_interval);