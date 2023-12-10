import Dropzone from "dropzone";

//para que no busque el comportamiento de la clase dropzone, sino que nosotros se lo daremos en un endopoint especifico
Dropzone.autoDiscover = false;

const dropzone = new Dropzone("#dropzone", {
    dictDefaultMessage: "Sube la imagen aquí",
    acceptedFiles: ".png, .jpg, .jpeg, .gif",
    addRemoveLinks: true,
    dictRemoveFile: "Borrar archivo",
    maxFiles: 1,
    uploadMultiple: false
});

dropzone.on("sending", function(file,xhr, formData){
    console.log(file);
});

dropzone.on("success", function(file, response){
    console.log(response);
});
dropzone.on("error", function(file, message){
    console.log(message);
});
dropzone.on("removedfile", function(){
    console.log("archivo eliminado");
});