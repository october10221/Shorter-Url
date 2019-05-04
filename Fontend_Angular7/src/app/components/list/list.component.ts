import { Component, OnInit } from '@angular/core';
import { ApiService } from '../../service/api.service';

@Component({
  selector: 'app-list',
  templateUrl: './list.component.html',
  styleUrls: ['./list.component.css']
})
export class ListComponent implements OnInit {

  public data:any=[];

  constructor(private ApiService:ApiService) { }

  ngOnInit() {
    this.ApiService.geturl().subscribe((response)=>{
      this.data=response;
      console.log(this.data);
    })
  }

}
