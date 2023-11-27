@extends('layouts.app')
@section('content')
                <div class="about" id="about">
                    <div class="content-inner">
                        <div class="content-header">
                            <h2>About Me</h2>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-6 col-lg-5">
                                <img src="{{ asset('assets/img/about.jpg') }}" alt="Image">
                            </div>
                            <div class="col-md-6 col-lg-7">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu suscipit orci. Donec molestie velit id libero blandit, quis suscipit urna suscipit. Donec aliquet erat eu lacinia iaculis. Ut tempor tellus eu sem pharetra feugiat. Proin libero ligula, gravida at porttitor eget.
                                </p>
                                <a class="btn" href="#">Hire Me</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="skills">
                                    <div class="skill-name">
                                        <p>Design</p><p>85%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="skill-name">
                                        <p>SEO</p><p>95%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="skills">
                                    <div class="skill-name">
                                        <p>Development</p><p>90%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="skill-name">
                                        <p>Marketing</p><p>85%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                 <!-- Education Start -->
                 <div class="education" id="education">
                    <div class="content-inner">
                        <div class="content-header">
                            <h2>Education</h2>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="edu-col">
                                    <span>01-Jan-2020 <i>to</i> 31-Dec-2050</span>
                                    <h3>Master Degree</h3>
                                    <p>Lorem ipsum dolor sit amet elit suscipit orci. Donec molestie velit id libero.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="edu-col">
                                    <span>01-Jan-2020 <i>to</i> 31-Dec-2050</span>
                                    <h3>Bachelor Degree</h3>
                                    <p>Lorem ipsum dolor sit amet elit suscipit orci. Donec molestie velit id libero.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="edu-col">
                                    <span>01-Jan-2020 <i>to</i> 31-Dec-2050</span>
                                    <h3>Associate Degree</h3>
                                    <p>Lorem ipsum dolor sit amet elit suscipit orci. Donec molestie velit id libero.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="edu-col">
                                    <span>01-Jan-2020 <i>to</i> 31-Dec-2050</span>
                                    <h3>High School</h3>
                                    <p>Lorem ipsum dolor sit amet elit suscipit orci. Donec molestie velit id libero.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Education Start -->
                
                <!-- Experience Start -->
                <div class="experience" id="experience">
                    <div class="content-inner">
                        <div class="content-header">
                            <h2>Experience</h2>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="exp-col">
                                    <span>01-Jan-2020 <i>to</i> 31-Dec-2050</span>
                                    <h3>Codex Solution</h3>
                                    <h4>San Francisco, CA</h4>
                                    <h5>Project Manager</h5>
                                    <p>Lorem ipsum dolor sit amet elit suscipit orci. Donec molestie velit id libero.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="exp-col">
                                    <span>01-Jan-2020 <i>to</i> 31-Dec-2050</span>
                                    <h3>Soft Solution Ltd</h3>
                                    <h4>San Francisco, CA</h4>
                                    <h5>Web Developer</h5>
                                    <p>Lorem ipsum dolor sit amet elit suscipit orci. Donec molestie velit id libero.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="exp-col">
                                    <span>01-Jan-2020 <i>to</i> 31-Dec-2050</span>
                                    <h3>ABC Soft Ltd</h3>
                                    <h4>San Francisco, CA</h4>
                                    <h5>Web Designer</h5>
                                    <p>Lorem ipsum dolor sit amet elit suscipit orci. Donec molestie velit id libero.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="exp-col">
                                    <span>01-Jan-2020 <i>to</i> 31-Dec-2050</span>
                                    <h3>Soft Agency</h3>
                                    <h4>San Francisco, CA</h4>
                                    <h5>Graphic Designer</h5>
                                    <p>Lorem ipsum dolor sit amet elit suscipit orci. Donec molestie velit id libero.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection