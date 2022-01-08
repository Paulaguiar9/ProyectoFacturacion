<invoice>
    <div class="well well-sm">

        <div class="row">
            <div class="col-md-2">
            <label> <b>Cédula del Cliente</b></label>
                <input id="client" class="form-control typeahead" type="Number" placeholder="Ingrese cédula " />
            </div>
            <div class="col-md-2">
            <label> <b>Nombre del Cliente</b></label>
                <input class="form-control typeahead"  placeholder="Cliente" disabled="true" value="{Nombre}" />
            </div>
             <div class="col-md-2">
             <label><b>Teléfono</b></label>
                <input class="form-control typeahead"placeholder="Telefono"  disabled="true" value="{Telefono}" />
            </div>
            <div class="col-md-3">
            <label><b>Dirección</b></label>
                <input class="form-control typeahead" type="text"  placeholder="Dirección"  disabled="true"value="{Direccion}" />
            </div>
        </div>
        
    </div>

    <div class="row">
        <div class="col-md-4">
        <label><b>Nombre del Producto</b></label>
            <input id="product" class="form-control" type="text" placeholder="Ingrese Nombre del producto" />
        </div>
        <div class="col-md-2">
        <label><b>Stock</b></label>
            <input id="stock" class="form-control" type="Number" placeholder="Stock" readonly value="{stock}" />
        </div>
        <div class="col-md-2">
        <label><b>Cantidad</b></label>
            <input id="quantity" class="form-control" type="Number" placeholder="Cantidad" />
        </div>
        <div class="col-md-2">
            <label><b>Precio</b></label>
                <input class="form-control" type="text" placeholder="Precio" value="{precioventa}" readonly />
        </div>
        <div class="col-md-1">
        <label><b></b></label>
           <button onclick={__addProductToDetail} class="btn btn-success " id="btn-agregar">
                <i class="fas fa-calendar-plus">Añadir</i>
            </button>
        </div>
    </div>

    <hr />

    <table class="table table-striped">
        <thead>
        <tr>
            <th style="width:40px;"></th>
            <th >Producto</th>
            <th style="width:100px;">Cantidad</th>
            <th style="width:100px;">Precio Unitario</th>
            <th style="width:100px;">Valor Total</th>
        </tr>
        </thead>
        <tbody>
        <tr each={detail}>
            <td>
                <button onclick={__removeProductFromDetail} class="btn btn-danger btn-xs btn-block">
                <i class="fa fa-trash"></i>
                </button>
            </td>
            <td>{nombre}</td>
            <td class="text-right">{quantity}</td>
            <td class="text-right">$ {precioventa.toFixed(2)}</td>
            <td class="text-right">$ {subTotal.toFixed(2)}</td>
        </tr>
        </tbody>
        <tfoot>
        <tr>
            <td colspan="4" class="text-right"align="right"><b>Sub Total</b></td>
            <td class="text-right">$ {subTotal.toFixed(2)}</td>
        </tr>
          <tr>
            <td colspan="4" class="text-right" align="right"><b>Iva (12%)</b></td>
            <td class="text-right">$ {iva.toFixed(2)}</td>
        </tr>
        <tr>
            <td colspan="4" class="text-right"align="right"><b>Total</b></td>
            <td class="text-right">$ {total.toFixed(2)}</td>
        </tr>
      
        </tfoot>
    </table>

    <button if={detail.length > 0 && client_id > 0} onclick={__save} class="btn btn-primary btn-lg btn-block">
        Guardar
    </button>

    <script>
        var self = this;

         // Detalle del comprobante
        self.client_id = 0;
        self.detail = [];
        self.iva = 0;
        self.subTotal= 0;
        self.total = 0;

        self.on('mount', function(){
            __clientAutocomplete();
            __productAutocomplete();
        
        })

         __removeProductFromDetail(e) {
            var item = e.item,
                index = this.detail.indexOf(item);

            this.detail.splice(index, 1);
            __calculate();
                }

        __addProductToDetail() {
           
            self.detail.push({
                id: self.product_id,
                nombre: self.product.value,
                quantity: parseFloat(self.quantity.value),
                precioventa: parseFloat(self.precioventa),
                subTotal: parseFloat(self.precioventa * self.quantity.value)
            });

            self.product_id = 0;
            self.product.value = '';
            self.quantity.value = '';
            self.precioventa = '';
            self.stock='';

            __calculate();
            }

        __save() {
            $.post(baseUrl('ventas-save'), {
                client_id: self.client_id,
                subTotal: self.subTotal,
                iva: self.iva,
                total: self.total,
                detail: self.detail
            }, function(r){
                if(r.response) {
                    window.location.href = baseUrl('ventas');
                } else {
                    alert('Algo esta mal ');
                }
            }, 'json')
        }

        function __calculate() {
            
            var subTotal=0;


            self.detail.forEach(function(e){
                subTotal += e.subTotal;
            });

            self.subTotal = subTotal;
            self.iva = parseFloat(subTotal *0.12);
            self.total = parseFloat(self.iva + self.subTotal);

             }

        function __clientAutocomplete(){
            var client = $("#client"),
                options = {
                url: function(q) {
                    return baseUrl('ventas/findClient?q=' + q);
                },
                getValue: 'Cedula',
                list: {
                    onClickEvent: function() {
                        var e = client.getSelectedItemData();
                        self.client_id = e.id;
                        self.Nombre = e.Nombre;
                        self.Telefono=e.Telefono;
                        self.Direccion = e.Direccion;

                        self.update();
                    }
                }
            };

            client.easyAutocomplete(options);
           }

       function __productAutocomplete(){
            var product = $("#product"),
                options = {
                url: function(q) {
                    return baseUrl('ventas/findProduct?q=' + q);
                },
                getValue: 'nombre',
                list: {
                    onClickEvent: function() {
                        var e = product.getSelectedItemData();
                        self.product_id = e.id;
                        self.precioventa = e.precioventa;
                        self.stock=e.stock;
                        self.update();
                    }
                }
            };

            product.easyAutocomplete(options);
        }
       
    </script>
</invoice>