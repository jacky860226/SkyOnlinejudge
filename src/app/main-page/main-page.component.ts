import { Component, OnInit } from '@angular/core';

import { BackgroundImageService } from '../background-image.service';

@Component({
  selector: 'app-main-page',
  templateUrl: './main-page.component.html',
  styleUrls: ['./main-page.component.css']
})
export class MainPageComponent implements OnInit {

  constructor(public BackgroundImage: BackgroundImageService) { }

  ngOnInit() {
  }
  MainPageBackgroundImage = '//i.imgur.com/1JlNX0n.jpg'

}
