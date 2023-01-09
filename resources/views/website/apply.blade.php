@extends('layout.main')
@section('title', 'PalHire - Apply')
@section('content')
    <form METHOD="POST" class="contact-section">
        <h1 class="text-center">Registeration</h1>
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-3">
                    <h3 class="text-center">Personal Information</h3>
                    <div class="form-row mb-3">
                        <div class="col-4">
                            <input type="text" class="form-control" id="first_name" id="first_name"
                                placeholder="First Name">
                        </div>
                        <div class="col-4">
                            <input type="text" class="form-control" id="middel_initial" id="middel_initial"
                                placeholder="Middel initial">
                        </div>
                        <div class="col-4">
                            <input type="text" class="form-control" id="last_name" id="last_name"
                                placeholder="Last name">
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        <div class="col-4">
                            <input type="text" class="form-control" id="occupation" id="occupation"
                                placeholder="Occupation">
                        </div>
                        <div class="col-4">
                            <input type="text" class="form-control" id="mobile1" id="mobile1" placeholder="Mobile1">
                        </div>
                        <div class="col-4">
                            <input type="text" class="form-control" id="mobile2" id="mobile2" placeholder="Mobile2">
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        <div class="col-4">
                            <input type="text" class="form-control" id="email1" id="email1" placeholder="Email1">
                        </div>
                        <div class="col-4">
                            <input type="text" class="form-control" id="email2" id="email2"
                                placeholder="Email2">
                        </div>
                        <div class="col-4">
                            <input type="text" class="form-control" id="personal_website" id="personal_website"
                                placeholder="Personal website">
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        <div class="col-6">
                            <input type="text" class="form-control" id="linkedin_profile" id="linkedin_profile"
                                placeholder="Linkedin profile">
                        </div>
                        <div class="col-6">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="resume" id="resume">
                                <label class="custom-file-label" for="resume">Resume</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 border-right">
                    <h3 class="text-center">Technical Skills</h3>
                    <div class="row">
                        <div class="col-9 px-2" id="techSkills">
                            <div class="input-group mb-3" id="skill0">
                                <input type="text" class="form-control" id="techSkill0" name="tech_skills[]"
                                    placeholder="Skill">
                                <div class="input-group-append">
                                    <span class="input-group-text text-danger" onclick="DeleteTechSkill(0)">X</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 px-2">
                            <button type="button" class="genric-btn primary circle" onclick="AddNewTechSkill()">Add</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 border-right">
                    <h3 class="text-center">Business Skills</h3>
                    <div class="row">
                        <div class="col-9 px-2" id="businessSkills">
                            <div class="input-group mb-3" id="skill-0">
                                <input type="text" class="form-control" id="businessSkill0" name="business_skills[]"
                                    placeholder="Skill">
                                <div class="input-group-append">
                                    <span class="input-group-text text-danger" onclick="DeleteBusinessSkill(0)">X</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 px-2">
                            <button type="button" class="genric-btn primary circle" onclick="AddNewBusinessSkill()">Add</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3 class="text-center">Tools</h3>
                    <div class="row">
                        <div class="col-9 px-2" id="tools">
                            <div class="input-group mb-3" id="tool-0">
                                <input type="text" class="form-control" id="tool" name="tool[]"
                                    placeholder="Tool">
                                <div class="input-group-append">
                                    <span class="input-group-text text-danger" onclick="DeleteTool(0)">X</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 px-2">
                            <button type="button" class="genric-btn primary circle" onclick="AddNewTool()">Add</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h3 class="text-center">Tools</h3>
                    <div class="row">
                        <div class="col-9 px-2" id="tools">
                            <div class="input-group mb-3" id="tool-0">
                                <input type="text" class="form-control" id="tool" name="tool[]"
                                    placeholder="Tool">
                                <div class="input-group-append">
                                    <span class="input-group-text text-danger" onclick="DeleteTool(0)">X</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 px-2">
                            <button type="button" class="genric-btn primary circle" onclick="AddNewTool()">Add</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
@section('scripts')
    <script>
        var techSkills = 0;

        function AddNewTechSkill() {
            techSkills++;
            $('#techSkills').append(
                '<div class="input-group mb-3" id="skill' + techSkills + '">' +
                '<input type="text" class="form-control" id="techSkill' + techSkills +
                '" name="tech_skills[]" placeholder="Skill">' +
                '<div class="input-group-append">' +
                '<span class="input-group-text text-danger" onclick="DeleteTechSkill(' + techSkills + ')">X</span>' +
                '</div>' +
                '</div>'
            )
        }

        function DeleteTechSkill(id) {
            $('#skill' + id).remove();
        }
        var businessSkills = 0;

        function AddNewBusinessSkill() {
            businessSkills++;
            $('#businessSkills').append(
                '<div class="input-group mb-3" id="skill-' + businessSkills + '">' +
                '<input type="text" class="form-control" id="businessSkill' + businessSkills +
                '" name="business_skills[]" placeholder="Skill">' +
                '<div class="input-group-append">' +
                '<span class="input-group-text text-danger" onclick="DeleteBusinessSkill(' + businessSkills +
                ')">X</span>' +
                '</div>' +
                '</div>'
            )
        }

        function DeleteBusinessSkill(id) {
            $('#skill-' + id).remove();
        }
        var tools = 0;

        function AddNewTool() {
            tools++;
            $('#tools').append(
                '<div class="input-group mb-3" id="tool-' + tools + '">' +
                '<input type="text" class="form-control" id="tool' + tools + '" name="tool[]" placeholder="Tool">' +
                '<div class="input-group-append">' +
                '<span class="input-group-text text-danger" onclick="DeleteTool(' + tools + ')">X</span>' +
                '</div>' +
                '</div>'
            )
        }

        function DeleteTool(id) {
            $('#tool-' + id).remove();
        }
    </script>
@endsection
