Ext.define('Extidi.modulos.monitores.controller.SubirImagen',{
    extend: 'Ext.app.Controller',
    refs: [
    {
        ref: 'Principal',
        selector: '[_="Extidi.modulos.monitores.view.SubirImagen"]'
    }
    ],
    init: function(){
        var me = this;
        me.control({
            
            '[$className="Extidi.modulos.monitores.view.SubirImagen"] [name=btnSubir]':{
                click:function(btn){
                    console.log("subiendo");
                    url = Extidi.modulos.monitores.constantes.URL_SUBIR_ARCHIVO,
                    console.log(url);
                }
            }
        });
    }
});