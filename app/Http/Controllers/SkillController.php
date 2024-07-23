<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SkillController extends Controller
{
    public function index()
    {
        // $skills = Skill::select('*', DB::raw('LEFT(remarks, 20) as remarks'))->paginate(15);
        $skills = Skill::paginate(15);
        return view('skill.index', [
            'skills' => $skills
        ]);
    }

    public function detail($id)
    {
        $skill = Skill::find($id);
        return view('skill.detail', [
            'skill' => $skill
        ]);
    }

    public function new()
    {
        return view('skill.new');
    }

    public function create(Request $request)
    {
        $skill = new Skill();
        $skill->skill_name = $request->input('skill_name');
        $skill->skill_status = $request->input('skill_status');
        $skill->remarks= $request->input('remarks');
        $skill->experience_years= $request->input('experience_years');
        $skill->save();
        return redirect('skill')->with('status', 'スキルを作成しました。');
    }

    public function edit($id)
    {
        $skill = Skill::find($id);
        return view('skill.edit', [
            'skill' => $skill
        ]);
    }

    public function update(Request $request)
    {
        $skill = Skill::find($request->input('id'));
        $skill->skill_name = $request->input('skill_name');
        $skill->skill_status = $request->input('skill_status');
        $skill->remarks= $request->input('remarks');
        $skill->experience_years= $request->input('experience_years');
        $skill->save();
        return redirect('skill')->with('status', 'スキルを更新しました。');
    }

    public function remove($id)
    {
        Skill::find($id)->delete();
        return redirect('skill')->with('status', 'スキルを削除しました。');
    }
}
