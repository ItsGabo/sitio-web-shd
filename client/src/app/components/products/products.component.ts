import { Component, OnInit } from '@angular/core';
import { Product, ProductsService } from 'src/app/services/products.service';

@Component({
  selector: 'app-products',
  templateUrl: './products.component.html',
  styleUrls: ['./products.component.css']
})
export class ProductsComponent implements OnInit {

  products: Product[] = [];

  constructor(private productService: ProductsService) { }

  ngOnInit(): void {
    this.productService.getProducts().subscribe(
      (resp:any) => {
        this.products = resp;
        console.log(this.products);
      }, error => {
        console.log(error);
      }
    )
  }

}
