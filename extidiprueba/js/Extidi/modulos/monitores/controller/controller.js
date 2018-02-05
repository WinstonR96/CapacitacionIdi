Ext.define('Extidi.modulos.monitores.controller.controller',{
    extend: 'Ext.app.Controller',
    autoLoad: true,
    refs: [
    {
        ref: 'Principal',
        selector: '[_="Extidi.modulos.monitores.view.Viewport"]'
    }
    ],
    init: function(){
        var me=this;
        var FilaSeleccionada = '';
        me.control({
            '[$className="Extidi.modulos.monitores.view.Viewport"] GrillaDinamico[modelo=mon_monitores]':{
                beforerender: function (grilla) {
                    var crud = Extidi.Helper.obtenerCrud(grilla.view,'mon_monitores');
                    crud.down("button[name=duplicar]").setDisabled(true);
                    crud.down("button[name=subir_foto]").setDisabled(true);
                    console.log("Entrando a monitor");
                },
                selectionchange:function(grid, seleccionados){
                    var crud = Extidi.Helper.obtenerCrud(grid.view,'mon_monitores');
                    if(seleccionados.length === 1){
                        crud.down("button[name=subir_foto]").setDisabled(false);
                        crud.down("button[name=duplicar]").setDisabled(false);
                        FilaSeleccionada = seleccionados[0].data;
                        //console.log(FilaSeleccionada);
                    }else{
                        FilaSeleccionada = '';
                        crud.down("button[name=duplicar]").setDisabled(true);
                        crud.down("button[name=subir_foto]").setDisabled(true);
                    }
                    
                    
                }
            },

            '[$className="Extidi.modulos.monitores.view.Viewport"] [name=duplicar]':{
                click: function(btn){
                    //var crud = Extidi.Helper.obtenerCrud(btn.view,'mon_monitores');
                    var panel = Extidi.Helper.obtenerGrilla(btn, 'mon_monitores');
                    console.log("Duplicando....");
                    var uri = 'http://localhost/extidiprueba/index.php/crudmonitores/crear';
                    console.log(FilaSeleccionada);
                    console.log(panel);
                    Ext.Ajax.request({
                         url: uri,
                         params: FilaSeleccionada,
                         method: 'POST',
                         success: function(response, request){
                             if(response.status){
                                Ext.Msg.alert("Correcto", "Duplicado");
                                panel.getStore().reload()
                             }else{
                                 Ext.Msg.alert("Advertencia", "No se pudo duplicar");
                             }
                            
                         },
                       failure: function (response, request) {
                            Ext.Msg.alert("Error", "Se produjo un error");

                        }

                    })
                }
            },

            '[$className="Extidi.modulos.monitores.view.Viewport"] [name=subir_foto]':{
                click: function(btn){
                    var panel = Extidi.Helper.obtenerGrilla(btn, 'mon_monitores');
                    //Ext.Msg.alert("Presionado", "Subir foto de perfil de "+FilaSeleccionada['nombres']+" "+FilaSeleccionada['apellidos']);
                    Ext.create('Extidi.modulos.monitores.view.SubirImagen',{
						grilla: panel,
						//Monitor: obj 
					})
                }
            }
		});
	}
});