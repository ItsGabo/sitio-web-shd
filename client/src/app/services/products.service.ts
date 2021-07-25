import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { environment } from 'src/environments/environment';

const apiUrl: string = environment.apiUrl;

@Injectable({
  providedIn: 'root'
})
export class ProductsService {

  constructor(private http: HttpClient) { }

  getProducts() {
    return this.executeQuery<Product>('/products');
  }

  private executeQuery<T>(query: string) {
    
    query = apiUrl + query;

    return this.http.get<T>(query);
  }
}

export interface Product {
  id:          number;
  name:        string;
  description: string;
  image:       string;
  price:       string;
  created_at:  Date;
  updated_at:  Date;
}