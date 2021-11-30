const f=function(){const n=document.createElement("link").relList;if(n&&n.supports&&n.supports("modulepreload"))return;for(const t of document.querySelectorAll('link[rel="modulepreload"]'))e(t);new MutationObserver(t=>{for(const a of t)if(a.type==="childList")for(const r of a.addedNodes)r.tagName==="LINK"&&r.rel==="modulepreload"&&e(r)}).observe(document,{childList:!0,subtree:!0});function s(t){const a={};return t.integrity&&(a.integrity=t.integrity),t.referrerpolicy&&(a.referrerPolicy=t.referrerpolicy),t.crossorigin==="use-credentials"?a.credentials="include":t.crossorigin==="anonymous"?a.credentials="omit":a.credentials="same-origin",a}function e(t){if(t.ep)return;t.ep=!0;const a=s(t);fetch(t.href,a)}};f();const u=document.querySelector("#loading_spinner");async function y(){u.classList.remove("hidden");const o="https://www.goodaff.com/api/get_lenders_by_user.php?";let n="";typeof goodAffUser!="undefined"&&(n=new URLSearchParams(goodAffUser).toString());const e=await(await fetch(o+n)).json();if(e.error){console.error(e);const t=document.createElement("p");return t.innerHTML="\u041D\u0435 \u0443\u0434\u0430\u043B\u043E\u0441\u044C \u043E\u0431\u043D\u0430\u0440\u0443\u0436\u0438\u0442\u044C \u043F\u0440\u0435\u0434\u043B\u043E\u0436\u0435\u043D\u0438\u044F!",t.classList.add("py-4","text-lg","font-medium","text-gray-800","text-center"),document.querySelector("#offer_container").parentElement.append(t),u.classList.add("hidden"),!1}else return u.classList.add("hidden"),e}function b(o,n,s,e,t,a,r,m,l,c){const i=document.createElement("div");let d="";typeof goodAffGo!="undefined"&&(d=new URLSearchParams(goodAffGo).toString());const p=`
    <a href="${o+"?"+d+"&s6="+n}" target="_blank" rel="nofollow" class="h-full relative p-4 flex flex-col border hover:border-primary-normal rounded-lg" id="offer">
      <div class="flex justify-center items-center w-full h-16">
        <img src="${s}" class="max-w-full max-h-full" loading="lazy" alt="${e} logo" id="offer_image" />
      </div>
      <div class="my-2 py-2 border-t-2 border-b-2 text-center">
        <span class="text-xs md:text-base" id="offer_slogan">${t}</span>
      </div>
      <div class="mt-auto">
        <div class="mb-2 flex justify-between items-center w-full text-sm">
          <span class="hidden md:block">\u041F\u0435\u0440\u0432\u044B\u0439</span>
          <span class="text-sm md:text-base text-center w-full md:w-auto">
            ${a==!0?"0.01%":""} \u0434\u043E <strong class="text-secondary-normal" id="offer_first_amount">${r} \u20B4</strong>
          </span>
        </div>
        <div class="mb-2 flex justify-between items-center w-full text-sm">
          <span class="hidden md:block">\u0421\u0443\u043C\u043C\u0430</span>
          <span class="text-sm md:text-base text-center w-full md:w-auto">\u043C\u0430\u0445 <strong class="text-secondary-normal" id="offer_max_amount">${m} \u20B4</strong></span>
        </div>
        <div class="flex justify-between items-center w-full text-sm">
          <span class="hidden md:block">\u0412\u043E\u0437\u0440\u0430\u0441\u0442</span>
          <span class="text-sm md:text-base text-center w-full md:w-auto">
            <strong class="text-secondary-normal" id="offer_min_age">${l}</strong> \u0434\u043E <strong class="text-secondary-normal" id="offer_max_age">${c}</strong>
          </span>
        </div>
      </div>
      <div class="mt-4 p-2 text-sm md:text-lg font-medium text-white text-center w-full bg-primary-normal rounded-lg">
        <span>\u041F\u043E\u0434\u0430\u0442\u044C \u0437\u0430\u044F\u0432\u043A\u0443</span>
      </div>
    </a>
  `;return i.innerHTML=p,i}function h(o,n,s,e,t,a,r,m,l,c,i,d,p){const g=document.createElement("div");let _="";typeof goodAffGo!="undefined"&&(_=new URLSearchParams(goodAffGo).toString()),l<62?l="62 \u0434\u043D\u044F":l=`${l} \u0434\u043D\u044F`,c<360?c="1 \u0433\u043E\u0434":c=`${Math.trunc(c/360)} \u0433\u043E\u0434`;const x=`
    <div class="h-full flex flex-col text-center bg-white border rounded-lg">
      <a href="${o+"?"+_+"&s6="+n}" target="_blank" rel="nofollow" class="p-2 font-medium text-secondary-normal hover:text-secondary-dark hover:underline">
        ${s} - ${e}
      </a>
      <div class="mt-auto">
        <p class="block p-2 text-gray-800 border-t">\u0410\u0434\u0440\u0435\u0441: ${t}</p>
        <p class="block p-2 text-gray-800 border-t">\u0422\u0435\u043B\u0435\u0444\u043E\u043D: ${a}</p>
        <p class="block p-2 text-gray-800 border-t">\u042D-\u043F\u043E\u0447\u0442\u0430: ${r}</p>
        <p class="block p-2 text-gray-800 border-t">Max \u0413\u041F\u0421 (APR): ${m}</p>
        <p class="block p-2 text-gray-800 border-t">\u0421\u0440\u043E\u043A: ${l} - ${c}</p>
        <p class="block p-2 text-gray-800 border-t">\u0412\u043E\u0437\u0440\u0430\u0441\u0442: ${i} \u0434\u043E ${d}</p>
        <p class="block p-2 text-gray-800 border-t">${p}</p>
      </div>
    </div>
  `;return g.innerHTML=x,g}function v(){const o=document.querySelector("#offer_container"),n=document.querySelector("#offer_info_container");y().then(s=>{typeof s=="object"&&(n.parentNode.querySelector("#offer_info_container_headline").classList.remove("hidden"),s.map((e,t)=>{if(e.tracking&&t+1&&e.logo&&e.campaign_domain&&e.slogan&&e.first_amount_free&&e.first_amount&&e.max_amount&&e.min_age&&e.max_age){const a=b(e.tracking,t+1,e.logo,e.campaign_domain,e.slogan,e.first_amount_free,e.first_amount,e.max_amount,e.min_age,e.max_age);o.appendChild(a)}if(e.tracking&&t+1&&e.campaign_company_domain&&e.campaign_company_name&&e.campaign_address&&e.campaign_phone&&e.campaign_email&&e.campaign_apr&&e.min_term&&e.max_term&&e.min_age&&e.max_age&&e.campaign_cost_example){const a=h(e.tracking,t+1,e.campaign_company_domain,e.campaign_company_name,e.campaign_address,e.campaign_phone,e.campaign_email,e.campaign_apr,e.min_term,e.max_term,e.min_age,e.max_age,e.campaign_cost_example);n.appendChild(a)}}))})}v();
