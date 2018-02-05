Ext.define('Extidi.modulos.monitores.view.Viewport',{
	extend: 'Extidi.sistema.escritorio.view.VentanaModuloEscritorio',
	title: 'Monitores',
	//icon: Extidi.modulos.extidi.usuarios.constantes.ICONO16,
	maximized: true,
	requires: [
	],
    initComponent: function() {
		var me=this;
		Extidi.Helper.construirHerencia(me);
		me.items = [
			Ext.create('Extidi.sistema.dinamico.view.Crud',{
				modelo: 'mon_monitores',
				anchoFormulario: 500,
				posicionFormulario: 'derecha',
				detalles: [
					{
						permiso: 'Extidi.modulos.monitores',
						modelo: 'mon_monitorias',
						posicionFormulario: 'derecha',
						nombre: 'Monitorias',
						campo: 'monitor_asignado'
					}
				]
				//, posicionFormulario: 'derecha'
			})
        ];
		me.callParent();
    }
});