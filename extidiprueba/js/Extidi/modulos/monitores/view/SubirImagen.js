Ext.define('Extidi.modulos.monitores.view.SubirImagen', {
    extend: 'Extidi.clases.VentanaModal',
    title: 'Subir foto de perfil',
    maximized: false,
    width: 450,
    height: 150,
    name: 'frm_subir_foto',
    requires: [],
    initComponent: function(){
        var me = this;
        var panelCreacion = Ext.create('Ext.form.Panel', {
            bodyPadding: 5,
            name: 'panel_creacion',
            width: 380,
            defaultType: 'textfield',
            defaults: { width: 380 },
            items: [
                {
                    xtype: 'form',
                    layout: 'hbox',
                    anchor: '100%',
                    items: [{
                        xtype: 'filefield',
                        name: 'archivo',
                        fieldLabel: 'Archivo',
                        width: 340,
                        msgTarget: 'side',
                        buttonText: 'Seleccionar'
                    },
                    {
                        xtype: 'button',
                        text: 'Subir',
                        name: 'btnSubir',
                        margin: '0 0 0 5',
                        action: 'subir',
                        width: 60
                    }]
                },
            ]
        });
        me.items = [panelCreacion];
        Extidi.Helper.construirHerencia(me);
        me.callParent();
    }
});