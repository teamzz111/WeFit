import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { AppComponent } from './app.component';
import { LandingPageComponent } from './landing/landing-page.component';
import { HomeComponent } from './home/home.component';
const appRoutes: Routes = [
  { path: '', component: LandingPageComponent },
  { path: 'home', component: HomeComponent}
];
@NgModule({
  declarations: [
    AppComponent,
    LandingPageComponent,
    HomeComponent
  ],
  exports: [RouterModule],
  imports: [
    BrowserModule,
    [RouterModule.forRoot(appRoutes)]
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
