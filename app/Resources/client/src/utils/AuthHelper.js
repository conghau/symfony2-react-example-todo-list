/**
 * Created by khoa on 11/9/16.
 */


export function isVisibleForAdmin() {
    const index = Object.keys(iCareRoles).find((i)=> {
        return iCareRoles[i] == 'ROLE_ADMIN' || iCareRoles[i] == 'ROLE_SUPER_ADMIN';
    });
    return typeof index !== 'undefined';
}

export function isVisibleForPrimaryContact() {
    const index = Object.keys(iCareRoles).find((i)=> {
        return (iCareRoles[i] == 'ROLE_USER' || iCareRoles[i] == 'ROLE_HR_ADMIN') && (iCareRoles[i] !== 'ROLE_ADMIN' || iCareRoles[i] == !'ROLE_SUPER_ADMIN') ;
    });
    return typeof index !== 'undefined';
}