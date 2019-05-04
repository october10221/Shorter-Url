import { Component, OnInit } from '@angular/core';
import { ApiService } from '../../service/api.service';

@Component({
    selector: 'app-home',
    templateUrl: './home.component.html',
    styleUrls: ['./home.component.css']
})

export class HomeComponent implements OnInit {

    public nameurl:string;

    constructor(private ApiService:ApiService) { }

    ngOnInit() {}


    addname(name){
        this.ApiService.addurl(name).subscribe(result=>{
          this.nameurl = "https://ok-place.com/api/"+result.data;
          });
        return false;
    }
}
