import { Injectable } from '@angular/core';
import { Http, Headers  } from '@angular/http';
import { map } from 'rxjs/operators';
import { HttpClient, HttpErrorResponse, HttpHeaders } from '@angular/common/http';


@Injectable({
  providedIn: 'root'
})
export class ApiService {

  constructor(private http: Http) { }

  geturl(){
    // return this.http.get("https://www.ok-place.com/api/url").pipe(map((res)=>res.json()));

    return this.http.get("http://127.0.0.1:8000/api/url").pipe(map((res)=>res.json()));
  }

  addurl(name){
  //   return this.http.post("https://www.ok-place.com/api/addurl",
  //     {name:name}
  //     ).pipe(map((res)=>res.json()));
  // }

  return this.http.post("http://127.0.0.1:8000/api/addurl",
      {name:name}
      ).pipe(map((res)=>res.json()));
  }

}
